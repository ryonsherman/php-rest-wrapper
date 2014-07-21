#!/usr/bin/env python2

import re
import os
import sys
import glob
import json
import argparse

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
    # initialize list of methods and sub-definitions
    methods, subdefs = {}, {}
    # attempt to retrieve replacement values
    vals = kwargs.get('vals', {})
    # attempt to retrieve parent name
    parent = kwargs.get('parent', '')

    # iterate resources and sub-defintions
    for res, subdef in definition.iteritems():
        # assign to list of sub-definitions
        if type(subdef) is dict:
            subdefs[res] = subdef
        # assign to list of methods
        elif type(subdef) is list:
            methods[res] = subdef
        # apply parent replacement value if available
        elif res in vals:
            vals[res] = vals[res].replace(res, subdef)
        # assign new replacement
        else: vals[res] = subdef

    # helper to anitize anchors
    def anchor(title):
        return ''.join(c for c in title if c.isalnum()).lower()

    # output resource header if not root
    if parent: outfile.write("\n## {}\n\n".format(
        '<a name="{}"></a>{}'.format(anchor(parent), parent)))

    # helper to return a list linked to anchors
    def linked_list(title, items):
        outfile.write("#### {}:\n\n{}\n".format(title,
            "\n".join(map(lambda x: "* [{}](#{})".format(x,
                anchor("{}{}".format(parent, x) if parent else x)),
            items.keys()))))

    # output resource list if available
    if subdefs: linked_list('Resources', subdefs)
    # output method list if available
    if methods: linked_list('Methods', methods)

    # iterate methods
    for method, subdef in methods.iteritems():
        # determine url and http method
        url, method_http =  subdef[1], subdef[0].upper()

        # apply replacement values on url
        for key, val in vals.iteritems():
            url = url.replace("{{{}}}".format(key), val)

        # determine static method path
        method_static = method
        # append parent path if available
        if parent: method_static = "{}::{}".format(parent, method)
        # determine instanced method path
        method_instanced = method_static.replace('::', '->')
        # determine method anchor
        method_anchor = anchor(method_static)

        # TODO

        # retrieve or initialize method arguments
        args = subdef[2] if len(subdef) > 2 else []
        # convert to list if string was passed
        if type(args) is not list: args = [args]
        # append passed arguments to those parsed from url
        args = re.findall('{([^}]*)}', url) + args

        # initialize param list and string
        params_list, params_string = '', ''
        # build param output
        if args:
            # append parameter header
            params_list += "\n* **Parameters:**\n\n"
            # iterate args
            for arg in args:
                # split arg into metadata
                arg = arg.split(':')
                # initialize argument options
                opts = []
                # parse out argument options if available
                if len(arg) > 2:
                    opts = arg[2].split(',')
                    url = url.replace(
                        "{{{}}}".format(':'.join(arg)),
                        "{{{}}}".format(arg[0]))

                # output argument as required
                if len(arg) < 2 or arg[1] == '!':
                    params_string += ", {}".format(arg[0])
                    list_item = "{} **required**".format(arg[0])
                # output argument as optional
                elif len(arg) > 1 and not arg[1]:
                    params_string += "[, {}]".format(arg[0])
                    list_item = "[{}] *optional*".format(arg[0])
                # output argument as optional with default
                else:
                    params_string += "[, {} = {}]".format(arg[0], arg[1])
                    list_item = "[{}] (default: {})".format(arg[0], arg[1])

                # append param list item to output
                params_list += "  * {}\n".format(list_item)
                # append param options as sub-list if available
                for opt in opts or []:
                    params_list += "     * {}\n".format(opt)

            # format initial parameter
            if params_string.startswith(','):
                params_string = params_string[2:]
            if params_string.startswith('[, '):
                params_string = params_string.replace('[, ', '[', 1)

        # determine `curl` command output
        curl = "curl "
        curl += "-u 'username:password' "
        curl += "-H 'application/json' "
        curl += "-d '{data}' " if len(subdef) > 2 else ''
        curl += "-X '{}' ".format(method_http)
        curl += "'{}'".format(url)

        # output to file
        outfile.write(template.format(**locals()))

    # iterate sub-definitions
    for res, subdef in subdefs.iteritems():
        # prepend parent resource if available
        if parent: res = "{}::{}".format(parent, res)
        # recurse sub-definition
        process(subdef, outfile, parent=res, vals=vals)

# iterate each filename in path
for filename in path:
    # determine filename, extension, and module name
    name, ext = os.path.splitext(filename)
    module = name.split('/')[-1]

    # open markdown file
    with open("{}.md".format(name), 'w') as outfile:
        # output file header
        outfile.write("{}\n\n".format(header.format(**locals())))

        # process file
        with open(filename, 'rb') as infile:
            process(json.load(infile), outfile)
