# PHP RESTWrapper

### `gist` module documentation

#### Resources:

* [Gist](#gist)

## <a name="gist"></a>Gist

#### Methods:

* [create](#gistcreate)
* [delete](#gistdelete)
* [filterPublic](#gistfilterpublic)
* [filterStarred](#gistfilterstarred)
* [filterUser](#gistfilteruser)
* [get](#gistget)
* [list](#gistlist)


### <a name="gistcreate"></a>Gist::create()

```php
Gist->create(data);
```

* **Method:** `POST`

* **Endpoint:** */gists*

* **Parameters:**

  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/gists'`


### <a name="gistdelete"></a>Gist::delete()

```php
Gist->delete(gist_id);
```

* **Method:** `DELETE`

* **Endpoint:** */gists/{gist_id}*

* **Parameters:**

  * `gist_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/gists/{gist_id}'`


### <a name="gistfilterpublic"></a>Gist::filterPublic()

```php
Gist->filterPublic([since]);
```

* **Method:** `GET`

* **Endpoint:** */gists/public?since={since}*

* **Parameters:**

  * [`since`] *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/gists/public?since={since}'`


### <a name="gistfilterstarred"></a>Gist::filterStarred()

```php
Gist->filterStarred([since]);
```

* **Method:** `GET`

* **Endpoint:** */gists/starred?since={since}*

* **Parameters:**

  * [`since`] *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/gists/starred?since={since}'`


### <a name="gistfilteruser"></a>Gist::filterUser()

```php
Gist->filterUser(username);
```

* **Method:** `GET`

* **Endpoint:** */users/{username}/gists*

* **Parameters:**

  * `username` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/users/{username}/gists'`


### <a name="gistget"></a>Gist::get()

```php
Gist->get(gist_id);
```

* **Method:** `GET`

* **Endpoint:** */gists/{gist_id}*

* **Parameters:**

  * `gist_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/gists/{gist_id}'`


### <a name="gistlist"></a>Gist::list()

```php
Gist->list([since]);
```

* **Method:** `GET`

* **Endpoint:** */gists?since={since}*

* **Parameters:**

  * [`since`] *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/gists?since={since}'`

