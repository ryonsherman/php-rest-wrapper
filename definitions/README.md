# API Definitions

## Structure

* Definitions should named `{api_name}.json`
* Documentation is autogenrated by `utils/autodoc.py`

### Resources

* Resource names are capitalized.
* Replacement values are inherited from parent resources.

**Example:**

```json
{
    // type: string
    "tag": "value",

    // type: list
    "methodName": [ ... ],

    // type: dict
    "Resource": {
        ...
    }
}
```

#### Types

* `string` type indicates a [replacement](#replacement-values) tag/value.
* `list` type indicates a resource method.
* `dict` type indicates a nested resource.

### Methods

`"{method_name}": ["{http_method}", "{endpoint}"(, "{parameters}")]`

* Method name, HTTP method, and endpoint URI are required.
   * Method names are camel-cased.
   * HTTP methods include `GET`, `PUT`, `POST`, and `DELETE`.
* Additional parameters include those not parsed from endpoint URI (i.e. JSON data).

**Examples:**

`"create": ["POST", "/users.json", "data"]`

`"update": ["PUT", "/users/{user_id}.json", "data"]`


## URI Syntax

### Parameter tags

`{tag_name[:(requirement|default)][:options]}`

```
tag={name} required
tag={name:!} required
tag={name:!:opt1,opt2} required with options
tag={name:} optional
tag={name:default} default
tag={name::opt1,opt2} optional with options
tag={name:default:opt1,opt2} options and default
```

**Examples:**

`/users/{user_id}.json` – required parameter

`/users.json?letter={letter:}` – optional parameter

`/users.json?filter={filter:!:all,unverified,deleted}` – required parameter with options

### Replacement values

Replacement values allow you to reduce a commonly used path across multiple method definitions.

* Values are inherited from parent resources. This allows you to build upon previous paths.
   * **Example**: `{"root": "{root}/{forum_id}/topics"}`
* Replacements, however, are not recursively performed on a set of values.
   * **Not Allowed**: `{"foo": "bar", "baz": "{foo}/qux"}`

**Example:**

Before:
```json
{
    "Forum": {
        "create": ["POST", "/categories/{category_id}/forums.json", "data"],
        "update": ["PUT", "/categories/{category_id}/forums/{forum_id}.json", "data"],
        "get": ["GET", "/categories/{category_id}/forums/{forum_id}.json"],
        "delete": ["DELETE", "/categories/{category_id}/forums/{forum_id}"],

        "Topic": {
            "create": ["POST", "/categories/{category_id}/forums/{forum_id}/topics.json", "data"],
            "update": ["PUT", "/categories/{category_id}/forums/{forum_id}/topics/{topic_id}.json", "data"],
            "get": ["GET", "/categories/{category_id}/forums/{forum_id}/topics"],
            "delete": ["DELETE", "/categories/{category_id}/forums/{forum_id}/topics/{topic_id}.json"]
        }
    }
}
```

After:
```json
{
    "Forum": {
        "root": "/categories/{category_id}/forums",

        "create": ["POST", "{root}.json", "data"],
        "update": ["PUT", "{root}/{forum_id}.json", "data"],
        "get": ["GET", "{root}/{forum_id}.json"],
        "delete": ["DELETE", "{root}/{forum_id}.json"],

        "Topic": {
            "root": "{root}/{forum_id}/topics",

            "create": ["POST", "{root}.json", "data"],
            "update": ["PUT", "{root}/{topic_id}.json", "data"],
            "get": ["GET", "{root}/{topic_id}.json"],
            "delete": ["DELETE", "{root}/{topic_id}.json"]
        }
    }
}
```

Replacement values are also helpful for defining a set of options.

**Example:**

```json
{
    "User": {
        "root": "/contacts",
        "states": "verified,unverified,all,deleted",

        "list": ["GET", "{root}.json?&state={state::{states}}"],
        "filter": ["GET", "{root}.json?query={query}&state={state::{states}}"]
    }
}
```
