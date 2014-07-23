PHP RESTWrapper
================

A PHP REST wrapper using pluggable API definitions

* [Example](#examples)

## Examples

### Creating a Gist

```php
include 'restwrapper.php';

$api = new RESTWrapper('https://api.github.com', 'gist.json');

$gist = $api->Gist->create([
    "public" => false,
    "description" => "Hello World",
    "files" => [
      "file1.txt" =>
        ["content" => "Hello"],
      "file2.txt" =>
        ["content" => "World"],
    ]
]);
```

```
stdClass Object (
    [url] => https://api.github.com/gists/bb5bdd95ed24cdac95f2
    [forks_url] => .../forks
    [commits_url] => .../commits
    [id] => bb5bdd95ed24cdac95f2
    [git_pull_url] => .../bb5bdd95ed24cdac95f2.git
    [git_push_url] => .../bb5bdd95ed24cdac95f2.git
    [html_url] => .../bb5bdd95ed24cdac95f2
    [files] => stdClass Object (
        [file1.txt] => stdClass Object (
            [filename] => file1.txt
            [type] => text/plain
            [language] =>
            [raw_url] => ...
            [size] => 5
            [truncated] =>
            [content] => Hello
        )
        ...
    [public] =>
    [created_at] => 2014-07-23T21:27:48Z
    [updated_at] => 2014-07-23T21:27:48Z
    [description] => Hello World
    [comments] => 0
    [user] =>
    [comments_url] => .../comments
    [forks] => Array (...)
    [history] => Array (...)
)
```
