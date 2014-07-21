# PHP RESTWrapper

### `freshdesk` module documentation

#### Resources:

* [Customer](#customer)
* [Group](#group)
* [Forum](#forum)
* [Solution](#solution)
* [User](#user)
* [Ticket](#ticket)

## <a name="customer"></a>Customer

#### Methods:

* [create](#customercreate)
* [delete](#customerdelete)
* [list](#customerlist)
* [update](#customerupdate)
* [get](#customerget)


### <a name="customercreate"></a>Customer::create()

```php
Customer->create(data);
```

* **Method:** `POST`

* **Endpoint:** */customers.json*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers.json'`


### <a name="customerdelete"></a>Customer::delete()

```php
Customer->delete(customer_id);
```

* **Method:** `DELETE`

* **Endpoint:** */customers/{customer_id}.json*

* **Parameters:**

  * customer_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers/{customer_id}.json'`


### <a name="customerlist"></a>Customer::list()

```php
Customer->list([name]);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?letter={name:}*

* **Parameters:**

  * [name] *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?letter={name:}'`


### <a name="customerupdate"></a>Customer::update()

```php
Customer->update(customer_id, data);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{customer_id}.json*

* **Parameters:**

  * customer_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/customers/{customer_id}.json'`


### <a name="customerget"></a>Customer::get()

```php
Customer->get(customer_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/{customer_id}.json*

* **Parameters:**

  * customer_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/{customer_id}.json'`

## <a name="group"></a>Group

#### Methods:

* [create](#groupcreate)
* [delete](#groupdelete)
* [list](#grouplist)
* [update](#groupupdate)
* [get](#groupget)


### <a name="groupcreate"></a>Group::create()

```php
Group->create(data);
```

* **Method:** `POST`

* **Endpoint:** */customers.json*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers.json'`


### <a name="groupdelete"></a>Group::delete()

```php
Group->delete(group_id);
```

* **Method:** `DELETE`

* **Endpoint:** */customers/{group_id}.json*

* **Parameters:**

  * group_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers/{group_id}.json'`


### <a name="grouplist"></a>Group::list()

```php
Group->list();
```

* **Method:** `GET`

* **Endpoint:** */customers.json*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json'`


### <a name="groupupdate"></a>Group::update()

```php
Group->update(group_id, data);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{group_id}.json*

* **Parameters:**

  * group_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/customers/{group_id}.json'`


### <a name="groupget"></a>Group::get()

```php
Group->get(group_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/{group_id}*

* **Parameters:**

  * group_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/{group_id}'`

## <a name="forum"></a>Forum

#### Resources:

* [Category](#forumcategory)
* [Topic](#forumtopic)
* [Post](#forumpost)
* [Monitor](#forummonitor)

#### Methods:

* [create](#forumcreate)
* [delete](#forumdelete)
* [update](#forumupdate)
* [get](#forumget)


### <a name="forumcreate"></a>Forum::create()

```php
Forum->create(data);
```

* **Method:** `POST`

* **Endpoint:** */customers.json*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers.json'`


### <a name="forumdelete"></a>Forum::delete()

```php
Forum->delete(forum_id);
```

* **Method:** `DELETE`

* **Endpoint:** */customers/{forum_id}.json*

* **Parameters:**

  * forum_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers/{forum_id}.json'`


### <a name="forumupdate"></a>Forum::update()

```php
Forum->update(forum_id, data);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{forum_id}.json*

* **Parameters:**

  * forum_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/customers/{forum_id}.json'`


### <a name="forumget"></a>Forum::get()

```php
Forum->get(forum_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/{forum_id}.json*

* **Parameters:**

  * forum_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/{forum_id}.json'`

## <a name="forumcategory"></a>Forum::Category

#### Methods:

* [create](#forumcategorycreate)
* [delete](#forumcategorydelete)
* [list](#forumcategorylist)
* [update](#forumcategoryupdate)
* [get](#forumcategoryget)


### <a name="forumcategorycreate"></a>Forum::Category::create()

```php
Forum->Category->create(data);
```

* **Method:** `POST`

* **Endpoint:** */customers.json*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers.json'`


### <a name="forumcategorydelete"></a>Forum::Category::delete()

```php
Forum->Category->delete(category_id);
```

* **Method:** `DELETE`

* **Endpoint:** */customers/{category_id}.json*

* **Parameters:**

  * category_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers/{category_id}.json'`


### <a name="forumcategorylist"></a>Forum::Category::list()

```php
Forum->Category->list();
```

* **Method:** `GET`

* **Endpoint:** */customers.json*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json'`


### <a name="forumcategoryupdate"></a>Forum::Category::update()

```php
Forum->Category->update(category_id, data);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{category_id}.json*

* **Parameters:**

  * category_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/customers/{category_id}.json'`


### <a name="forumcategoryget"></a>Forum::Category::get()

```php
Forum->Category->get(category_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/{category_id}.json*

* **Parameters:**

  * category_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/{category_id}.json'`

## <a name="forumtopic"></a>Forum::Topic

#### Methods:

* [create](#forumtopiccreate)
* [get](#forumtopicget)
* [update](#forumtopicupdate)
* [delete](#forumtopicdelete)


### <a name="forumtopiccreate"></a>Forum::Topic::create()

```php
Forum->Topic->create(data);
```

* **Method:** `POST`

* **Endpoint:** */customers.json*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers.json'`


### <a name="forumtopicget"></a>Forum::Topic::get()

```php
Forum->Topic->get(topic_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/{topic_id}.json*

* **Parameters:**

  * topic_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/{topic_id}.json'`


### <a name="forumtopicupdate"></a>Forum::Topic::update()

```php
Forum->Topic->update(topic_id, data);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{topic_id}.json*

* **Parameters:**

  * topic_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/customers/{topic_id}.json'`


### <a name="forumtopicdelete"></a>Forum::Topic::delete()

```php
Forum->Topic->delete(topic_id);
```

* **Method:** `DELETE`

* **Endpoint:** */customers/{topic_id}.json*

* **Parameters:**

  * topic_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers/{topic_id}.json'`

## <a name="forumpost"></a>Forum::Post

#### Methods:

* [create](#forumpostcreate)
* [update](#forumpostupdate)
* [delete](#forumpostdelete)


### <a name="forumpostcreate"></a>Forum::Post::create()

```php
Forum->Post->create(category_id, forum_id, topic_id, data);
```

* **Method:** `POST`

* **Endpoint:** */customers.json?category_id={category_id}&forum_id={forum_id}&topic_id={topic_id}*

* **Parameters:**

  * category_id **required**
  * forum_id **required**
  * topic_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers.json?category_id={category_id}&forum_id={forum_id}&topic_id={topic_id}'`


### <a name="forumpostupdate"></a>Forum::Post::update()

```php
Forum->Post->update(post_id, data);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{post_id}.json*

* **Parameters:**

  * post_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/customers/{post_id}.json'`


### <a name="forumpostdelete"></a>Forum::Post::delete()

```php
Forum->Post->delete(post_id);
```

* **Method:** `DELETE`

* **Endpoint:** */customers/{post_id}.json*

* **Parameters:**

  * post_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers/{post_id}.json'`

## <a name="forummonitor"></a>Forum::Monitor

#### Methods:

* [status](#forummonitorstatus)
* [topics](#forummonitortopics)
* [set](#forummonitorset)
* [unset](#forummonitorunset)


### <a name="forummonitorstatus"></a>Forum::Monitor::status()

```php
Forum->Monitor->status(topic_id, user_id);
```

* **Method:** `GET`

* **Endpoint:** */support/discussions/topics/{topic_id}/check_monitor.json?user_id={user_id}*

* **Parameters:**

  * topic_id **required**
  * user_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/support/discussions/topics/{topic_id}/check_monitor.json?user_id={user_id}'`


### <a name="forummonitortopics"></a>Forum::Monitor::topics()

```php
Forum->Monitor->topics(user_id);
```

* **Method:** `GET`

* **Endpoint:** */support/discussions/user_monitored?user_id={user_id}*

* **Parameters:**

  * user_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/support/discussions/user_monitored?user_id={user_id}'`


### <a name="forummonitorset"></a>Forum::Monitor::set()

```php
Forum->Monitor->set();
```

* **Method:** `POST`

* **Endpoint:** */customers.json*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'POST' '/customers.json'`


### <a name="forummonitorunset"></a>Forum::Monitor::unset()

```php
Forum->Monitor->unset();
```

* **Method:** `DELETE`

* **Endpoint:** */customers.json*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers.json'`

## <a name="solution"></a>Solution

#### Resources:

* [Category](#solutioncategory)
* [Article](#solutionarticle)
* [Folder](#solutionfolder)

## <a name="solutioncategory"></a>Solution::Category

#### Methods:

* [create](#solutioncategorycreate)
* [get](#solutioncategoryget)
* [list](#solutioncategorylist)
* [update](#solutioncategoryupdate)
* [delete](#solutioncategorydelete)


### <a name="solutioncategorycreate"></a>Solution::Category::create()

```php
Solution->Category->create(data);
```

* **Method:** `POST`

* **Endpoint:** */customers.json*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers.json'`


### <a name="solutioncategoryget"></a>Solution::Category::get()

```php
Solution->Category->get(category_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/{category_id}*

* **Parameters:**

  * category_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/{category_id}'`


### <a name="solutioncategorylist"></a>Solution::Category::list()

```php
Solution->Category->list();
```

* **Method:** `GET`

* **Endpoint:** */customers.json*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json'`


### <a name="solutioncategoryupdate"></a>Solution::Category::update()

```php
Solution->Category->update(category_id, data);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{category_id}.json*

* **Parameters:**

  * category_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/customers/{category_id}.json'`


### <a name="solutioncategorydelete"></a>Solution::Category::delete()

```php
Solution->Category->delete(category_id);
```

* **Method:** `DELETE`

* **Endpoint:** */customers/{category_id}.json*

* **Parameters:**

  * category_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers/{category_id}.json'`

## <a name="solutionarticle"></a>Solution::Article

#### Methods:

* [create](#solutionarticlecreate)
* [delete](#solutionarticledelete)
* [list](#solutionarticlelist)
* [update](#solutionarticleupdate)
* [get](#solutionarticleget)


### <a name="solutionarticlecreate"></a>Solution::Article::create()

```php
Solution->Article->create([tags], data);
```

* **Method:** `POST`

* **Endpoint:** */customers/articles.json?tags={tags:}*

* **Parameters:**

  * [tags] *optional*
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers/articles.json?tags={tags:}'`


### <a name="solutionarticledelete"></a>Solution::Article::delete()

```php
Solution->Article->delete(article_id);
```

* **Method:** `DELETE`

* **Endpoint:** */customers/articles/{article_id}.json*

* **Parameters:**

  * article_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers/articles/{article_id}.json'`


### <a name="solutionarticlelist"></a>Solution::Article::list()

```php
Solution->Article->list();
```

* **Method:** `GET`

* **Endpoint:** */customers.json*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json'`


### <a name="solutionarticleupdate"></a>Solution::Article::update()

```php
Solution->Article->update(article_id[, tags], data);
```

* **Method:** `PUT`

* **Endpoint:** */customers/articles/{article_id}.json?tags={tags:}*

* **Parameters:**

  * article_id **required**
  * [tags] *optional*
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/customers/articles/{article_id}.json?tags={tags:}'`


### <a name="solutionarticleget"></a>Solution::Article::get()

```php
Solution->Article->get(article_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/articles/{article_id}.json*

* **Parameters:**

  * article_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/articles/{article_id}.json'`

## <a name="solutionfolder"></a>Solution::Folder

#### Methods:

* [create](#solutionfoldercreate)
* [get](#solutionfolderget)
* [update](#solutionfolderupdate)
* [delete](#solutionfolderdelete)


### <a name="solutionfoldercreate"></a>Solution::Folder::create()

```php
Solution->Folder->create(data);
```

* **Method:** `POST`

* **Endpoint:** */customers.json*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers.json'`


### <a name="solutionfolderget"></a>Solution::Folder::get()

```php
Solution->Folder->get(folder_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/{folder_id}.json*

* **Parameters:**

  * folder_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/{folder_id}.json'`


### <a name="solutionfolderupdate"></a>Solution::Folder::update()

```php
Solution->Folder->update(folder_id, data);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{folder_id}.json*

* **Parameters:**

  * folder_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/customers/{folder_id}.json'`


### <a name="solutionfolderdelete"></a>Solution::Folder::delete()

```php
Solution->Folder->delete(folder_id);
```

* **Method:** `DELETE`

* **Endpoint:** */customers/{folder_id}.json*

* **Parameters:**

  * folder_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers/{folder_id}.json'`

## <a name="user"></a>User

#### Methods:

* [get](#userget)
* [create](#usercreate)
* [list](#userlist)
* [update](#userupdate)
* [filter](#userfilter)
* [delete](#userdelete)


### <a name="userget"></a>User::get()

```php
User->get(contact_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/{contact_id}.json*

* **Parameters:**

  * contact_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/{contact_id}.json'`


### <a name="usercreate"></a>User::create()

```php
User->create(data);
```

* **Method:** `POST`

* **Endpoint:** */customers.json*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers.json'`


### <a name="userlist"></a>User::list()

```php
User->list([state]);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?&state={state}*

* **Parameters:**

  * [state] *optional*
     * verified
     * unverified
     * all
     * deleted

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?&state={state}'`


### <a name="userupdate"></a>User::update()

```php
User->update(contact_id, data);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{contact_id}.json*

* **Parameters:**

  * contact_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/customers/{contact_id}.json'`


### <a name="userfilter"></a>User::filter()

```php
User->filter(query[, state]);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?query={query}&state={state}*

* **Parameters:**

  * query **required**
  * [state] *optional*
     * verified
     * unverified
     * all
     * deleted

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?query={query}&state={state}'`


### <a name="userdelete"></a>User::delete()

```php
User->delete(contact_id);
```

* **Method:** `DELETE`

* **Endpoint:** */customers/{contact_id}.json*

* **Parameters:**

  * contact_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers/{contact_id}.json'`

## <a name="ticket"></a>Ticket

#### Resources:

* [Survey](#ticketsurvey)
* [TimeEntry](#tickettimeentry)

#### Methods:

* [restore](#ticketrestore)
* [filterRequester](#ticketfilterrequester)
* [get](#ticketget)
* [fields](#ticketfields)
* [create](#ticketcreate)
* [filterCompanyName](#ticketfiltercompanyname)
* [list](#ticketlist)
* [update](#ticketupdate)
* [filter](#ticketfilter)
* [filterEmail](#ticketfilteremail)
* [note](#ticketnote)
* [filterView](#ticketfilterview)
* [pick](#ticketpick)
* [assign](#ticketassign)
* [filterCompany](#ticketfiltercompany)
* [delete](#ticketdelete)


### <a name="ticketrestore"></a>Ticket::restore()

```php
Ticket->restore(ticket_id);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{ticket_id}/restore.json*

* **Parameters:**

  * ticket_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'PUT' '/customers/{ticket_id}/restore.json'`


### <a name="ticketfilterrequester"></a>Ticket::filterRequester()

```php
Ticket->filterRequester(requester_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/filter/requester/{requester_id}?format=json*

* **Parameters:**

  * requester_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/filter/requester/{requester_id}?format=json'`


### <a name="ticketget"></a>Ticket::get()

```php
Ticket->get(ticket_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/{ticket_id}.json*

* **Parameters:**

  * ticket_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/{ticket_id}.json'`


### <a name="ticketfields"></a>Ticket::fields()

```php
Ticket->fields();
```

* **Method:** `GET`

* **Endpoint:** *ticket_fields.json*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' 'ticket_fields.json'`


### <a name="ticketcreate"></a>Ticket::create()

```php
Ticket->create(data);
```

* **Method:** `POST`

* **Endpoint:** */customers.json*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers.json'`


### <a name="ticketfiltercompanyname"></a>Ticket::filterCompanyName()

```php
Ticket->filterCompanyName(name[, filter = all_tickets]);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?&company_name={name}&filter_name={filter}*

* **Parameters:**

  * name **required**
  * [filter] (default: all_tickets)
     * all_tickets
     * new_my_open
     * monitored_by
     * spam
     * deleted

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?&company_name={name}&filter_name={filter}'`


### <a name="ticketlist"></a>Ticket::list()

```php
Ticket->list([filter = all_tickets]);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?filter_name={filter}*

* **Parameters:**

  * [filter] (default: all_tickets)
     * all_tickets
     * new_my_open
     * monitored_by
     * spam
     * deleted

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?filter_name={filter}'`


### <a name="ticketupdate"></a>Ticket::update()

```php
Ticket->update(ticket_id, data);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{ticket_id}.json*

* **Parameters:**

  * ticket_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/customers/{ticket_id}.json'`


### <a name="ticketfilter"></a>Ticket::filter()

```php
Ticket->filter(filter);
```

* **Method:** `GET`

* **Endpoint:** */customers/filter/{filter}?format=json*

* **Parameters:**

  * filter **required**
     * all_tickets
     * new_my_open
     * monitored_by
     * spam
     * deleted

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/filter/{filter}?format=json'`


### <a name="ticketfilteremail"></a>Ticket::filterEmail()

```php
Ticket->filterEmail(email[, filter = all_tickets]);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?email={email}&filter_name={filter}*

* **Parameters:**

  * email **required**
  * [filter] (default: all_tickets)
     * all_tickets
     * new_my_open
     * monitored_by
     * spam
     * deleted

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?email={email}&filter_name={filter}'`


### <a name="ticketnote"></a>Ticket::note()

```php
Ticket->note(ticket_id, data);
```

* **Method:** `POST`

* **Endpoint:** */customers/{ticket_id}/conversations/note.json*

* **Parameters:**

  * ticket_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers/{ticket_id}/conversations/note.json'`


### <a name="ticketfilterview"></a>Ticket::filterView()

```php
Ticket->filterView(view_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/view/{view_id}?format=json*

* **Parameters:**

  * view_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/view/{view_id}?format=json'`


### <a name="ticketpick"></a>Ticket::pick()

```php
Ticket->pick(ticket_id);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{ticket_id}/pick_tickets.json*

* **Parameters:**

  * ticket_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'PUT' '/customers/{ticket_id}/pick_tickets.json'`


### <a name="ticketassign"></a>Ticket::assign()

```php
Ticket->assign(ticket_id, user_id);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{ticket_id}/assign.json?responder_id={user_id}*

* **Parameters:**

  * ticket_id **required**
  * user_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'PUT' '/customers/{ticket_id}/assign.json?responder_id={user_id}'`


### <a name="ticketfiltercompany"></a>Ticket::filterCompany()

```php
Ticket->filterCompany(company_id[, filter = all_tickets]);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?company_id={company_id}&filter_name={filter}*

* **Parameters:**

  * company_id **required**
  * [filter] (default: all_tickets)
     * all_tickets
     * new_my_open
     * monitored_by
     * spam
     * deleted

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?company_id={company_id}&filter_name={filter}'`


### <a name="ticketdelete"></a>Ticket::delete()

```php
Ticket->delete(ticket_id);
```

* **Method:** `DELETE`

* **Endpoint:** */customers/{ticket_id}.json*

* **Parameters:**

  * ticket_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers/{ticket_id}.json'`

## <a name="ticketsurvey"></a>Ticket::Survey

#### Methods:

* [create](#ticketsurveycreate)
* [get](#ticketsurveyget)


### <a name="ticketsurveycreate"></a>Ticket::Survey::create()

```php
Ticket->Survey->create(rating, data);
```

* **Method:** `POST`

* **Endpoint:** */customers/rate.json?rating={rating}*

* **Parameters:**

  * rating **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers/rate.json?rating={rating}'`


### <a name="ticketsurveyget"></a>Ticket::Survey::get()

```php
Ticket->Survey->get();
```

* **Method:** `GET`

* **Endpoint:** */customers.json*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json'`

## <a name="tickettimeentry"></a>Ticket::TimeEntry

#### Methods:

* [toggleTimer](#tickettimeentrytoggletimer)
* [filterStartTime](#tickettimeentryfilterstarttime)
* [get](#tickettimeentryget)
* [create](#tickettimeentrycreate)
* [filterAgentEmail](#tickettimeentryfilteragentemail)
* [list](#tickettimeentrylist)
* [update](#tickettimeentryupdate)
* [filter](#tickettimeentryfilter)
* [filterBillable](#tickettimeentryfilterbillable)
* [filterAgent](#tickettimeentryfilteragent)
* [filterEndTime](#tickettimeentryfilterendtime)
* [filterCustomer](#tickettimeentryfiltercustomer)
* [filterCompanyEmail](#tickettimeentryfiltercompanyemail)
* [filterCompany](#tickettimeentryfiltercompany)
* [delete](#tickettimeentrydelete)


### <a name="tickettimeentrytoggletimer"></a>Ticket::TimeEntry::toggleTimer()

```php
Ticket->TimeEntry->toggleTimer(time_entry_id);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{time_entry_id}/toggle_timer.json*

* **Parameters:**

  * time_entry_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'PUT' '/customers/{time_entry_id}/toggle_timer.json'`


### <a name="tickettimeentryfilterstarttime"></a>Ticket::TimeEntry::filterStartTime()

```php
Ticket->TimeEntry->filterStartTime(start_date);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?start_date={start_date}*

* **Parameters:**

  * start_date **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?start_date={start_date}'`


### <a name="tickettimeentryget"></a>Ticket::TimeEntry::get()

```php
Ticket->TimeEntry->get(ticket_id);
```

* **Method:** `GET`

* **Endpoint:** */customers/{ticket_id}/time_sheets.json*

* **Parameters:**

  * ticket_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers/{ticket_id}/time_sheets.json'`


### <a name="tickettimeentrycreate"></a>Ticket::TimeEntry::create()

```php
Ticket->TimeEntry->create(ticket_id, data);
```

* **Method:** `POST`

* **Endpoint:** */customers/{ticket_id}/time_sheets.json*

* **Parameters:**

  * ticket_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/customers/{ticket_id}/time_sheets.json'`


### <a name="tickettimeentryfilteragentemail"></a>Ticket::TimeEntry::filterAgentEmail()

```php
Ticket->TimeEntry->filterAgentEmail(agent_email);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?agent_email={agent_email}*

* **Parameters:**

  * agent_email **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?agent_email={agent_email}'`


### <a name="tickettimeentrylist"></a>Ticket::TimeEntry::list()

```php
Ticket->TimeEntry->list([filter][, value]);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?{filter}={value:}*

* **Parameters:**

  * [filter] *optional*
     * all_tickets
     * new_my_open
     * monitored_by
     * spam
     * deleted
  * [value] *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?{filter}={value:}'`


### <a name="tickettimeentryupdate"></a>Ticket::TimeEntry::update()

```php
Ticket->TimeEntry->update(ticket_id, time_entry_id, data);
```

* **Method:** `PUT`

* **Endpoint:** */customers/{ticket_id}/time_sheets/{time_entry_id}.json*

* **Parameters:**

  * ticket_id **required**
  * time_entry_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/customers/{ticket_id}/time_sheets/{time_entry_id}.json'`


### <a name="tickettimeentryfilter"></a>Ticket::TimeEntry::filter()

```php
Ticket->TimeEntry->filter(filter, value);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?{filter}={value}*

* **Parameters:**

  * filter **required**
     * all_tickets
     * new_my_open
     * monitored_by
     * spam
     * deleted
  * value **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?{filter}={value}'`


### <a name="tickettimeentryfilterbillable"></a>Ticket::TimeEntry::filterBillable()

```php
Ticket->TimeEntry->filterBillable(billable);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?billable={billable}*

* **Parameters:**

  * billable **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?billable={billable}'`


### <a name="tickettimeentryfilteragent"></a>Ticket::TimeEntry::filterAgent()

```php
Ticket->TimeEntry->filterAgent(agent_id);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?agent_id={agent_id}*

* **Parameters:**

  * agent_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?agent_id={agent_id}'`


### <a name="tickettimeentryfilterendtime"></a>Ticket::TimeEntry::filterEndTime()

```php
Ticket->TimeEntry->filterEndTime(end_date);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?end_date={end_date}*

* **Parameters:**

  * end_date **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?end_date={end_date}'`


### <a name="tickettimeentryfiltercustomer"></a>Ticket::TimeEntry::filterCustomer()

```php
Ticket->TimeEntry->filterCustomer(customer_id);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?customer_id={customer_id}*

* **Parameters:**

  * customer_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?customer_id={customer_id}'`


### <a name="tickettimeentryfiltercompanyemail"></a>Ticket::TimeEntry::filterCompanyEmail()

```php
Ticket->TimeEntry->filterCompanyEmail(company_email);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?company_email={company_email}*

* **Parameters:**

  * company_email **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?company_email={company_email}'`


### <a name="tickettimeentryfiltercompany"></a>Ticket::TimeEntry::filterCompany()

```php
Ticket->TimeEntry->filterCompany(company_name);
```

* **Method:** `GET`

* **Endpoint:** */customers.json?company_name={company_name}*

* **Parameters:**

  * company_name **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/customers.json?company_name={company_name}'`


### <a name="tickettimeentrydelete"></a>Ticket::TimeEntry::delete()

```php
Ticket->TimeEntry->delete(ticket_id, time_entry_id);
```

* **Method:** `DELETE`

* **Endpoint:** */customers/{ticket_id}/time_sheets/{time_entry_id}.json*

* **Parameters:**

  * ticket_id **required**
  * time_entry_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/customers/{ticket_id}/time_sheets/{time_entry_id}.json'`

