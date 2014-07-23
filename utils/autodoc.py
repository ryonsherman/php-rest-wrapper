#!/usr/bin/env python2

__author__ = "Ryon Sherman"
__email__ = "ryon.sherman@gmail.com"
__license__ = "MIT"
__copyright__ = """
The MIT License (MIT)

Copyright (c) 2014 Ryon Sherman

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
"""

import re
import os
import sys
import glob
import json
import argparse
import collections

parser = argparse.ArgumentParser()
parser.add_argument('path')

args = parser.parse_args()
path = glob.glob(args.path)
if not path:
    parser.print_usage()
    sys.exit(1)

header = \
"""
# PHP RESTWrapper

### `{module}` module documentation
""".strip()
template = \
"""
### <a name="{method_anchor}"></a>{method_static}()

```php
{method_instanced}({params_string});
```

* **Method:** `{method_http}`

* **Endpoint:** *{url}*
{params_list}
* **Curl:**

  `{curl}`
"""

def process(definition, outfile, **kwargs):
    # Initialize list of methods and sub-definitions
    methods, subdefs = {}, {}
    # Attempt to retrieve replacement values
    vals = kwargs.get('vals', {})
    # Attempt to retrieve parent name
    parent = kwargs.get('parent', '')

    # Iterate resources and sub-defintions
    for res, subdef in definition.iteritems():
        # Assign to list of sub-definitions
        if type(subdef) is dict:
            subdefs[res] = subdef
        # Assign to list of methods
        elif type(subdef) is list:
            methods[res] = subdef
        # Apply parent replacement value if available
        elif res in vals:
            vals[res] = vals[res].replace(res, subdef)
        # Assign new replacement
        else: vals[res] = subdef

    methods = collections.OrderedDict(sorted(methods.items()))
    subdefs = collections.OrderedDict(sorted(subdefs.items()))

    # Helper to anitize anchors
    def anchor(title):
        return ''.join(c for c in title if c.isalnum()).lower()

    # Output resource header if not root
    if parent: outfile.write("## {}\n\n".format(
        '<a name="{}"></a>{}'.format(anchor(parent), parent)))

    # Helper to return a list linked to anchors
    def linked_list(title, items):
        outfile.write("#### {}:\n\n{}\n\n".format(title,
            "\n".join(map(lambda x: "* [{}](#{})".format(x,
                anchor("{}{}".format(parent, x) if parent else x)),
            items.keys()))))

    # Output resource list if available
    if subdefs: linked_list('Resources', subdefs)
    # Output method list if available
    if methods: linked_list('Methods', methods)

    # Iterate methods
    for method, subdef in methods.iteritems():
        # Determine url and http method
        url, method_http =  subdef[1], subdef[0].upper()

        # Apply replacement values on url
        for key, val in vals.iteritems():
            url = url.replace("{{{}}}".format(key), val)

        # Determine static method path
        method_static = method
        # Append parent path if available
        if parent: method_static = "{}::{}".format(parent, method)
        # Determine instanced method path
        method_instanced = method_static.replace('::', '->')
        # Determine method anchor
        method_anchor = anchor(method_static)

        # Retrieve or initialize method arguments
        args = subdef[2] if len(subdef) > 2 else []
        # Convert to list if string was passed
        if type(args) is not list: args = [args]
        # Append passed arguments to those parsed from url
        args = re.findall('{([^}]*)}', url) + args

        # Initialize param list and string
        params_list, params_string = '', ''
        # Build param output
        if args:
            # Append parameter header
            params_list += "\n* **Parameters:**\n\n"
            # Iterate args
            for arg in args:
                # Split arg into metadata
                arg = arg.split(':')
                # Initialize argument options
                opts = []
                # Parse out argument options if available
                if len(arg) > 1:
                    if len(arg) > 2: opts = arg[2].split(',')
                    url = url.replace(
                        "{{{}}}".format(':'.join(arg)),
                        "{{{}}}".format(arg[0]))

                # Output argument as required
                if len(arg) < 2 or arg[1] == '!':
                    params_string += ", {}".format(arg[0])
                    list_item = "`{}` **required**".format(arg[0])
                # Output argument as optional
                elif len(arg) > 1 and not arg[1]:
                    params_string += "[, {}]".format(arg[0])
                    list_item = "[`{}`] *optional*".format(arg[0])
                # Output argument as optional with default
                else:
                    params_string += "[, {} = {}]".format(arg[0], arg[1])
                    list_item = "[`{}`] (default: `{}`)".format(arg[0], arg[1])

                # Append param list item to output
                params_list += "  * {}\n".format(list_item)
                # Append param options as sub-list if available
                for opt in opts or []:
                    params_list += "     * {}\n".format(opt)

            # Format initial parameter
            if params_string.startswith(','):
                params_string = params_string[2:]
            if params_string.startswith('[, '):
                params_string = params_string.replace('[, ', '[', 1)

        # Determine `curl` command output
        curl = "curl "
        curl += "-u 'username:password' "
        curl += "-H 'application/json' "
        curl += "-d '{data}' " if len(subdef) > 2 else ''
        curl += "-X '{}' ".format(method_http)
        curl += "'{}'".format(url)

        # Output to file
        outfile.write("{}\n".format(template.format(**locals())))

    # Iterate sub-definitions
    for res, subdef in subdefs.iteritems():
        # Prepend parent resource if available
        if parent: res = "{}::{}".format(parent, res)
        # Recurse sub-definition
        process(subdef, outfile, parent=res, vals=vals)

# Iterate each filename in path
for filename in path:
    # Determine filename, extension, and module name
    name, ext = os.path.splitext(filename)
    module = name.split('/')[-1]

    # Open markdown file
    with open("{}.md".format(name), 'w') as outfile:
        # Output file header
        outfile.write("{}\n\n".format(header.format(**locals())))

        # Process file
        with open(filename, 'rb') as infile:
            process(json.load(infile), outfile)
