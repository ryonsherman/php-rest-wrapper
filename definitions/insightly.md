# PHP RESTWrapper

### `insightly` module documentation

#### Resources:

* [Relationships](#relationships)
* [TaskCategories](#taskcategories)
* [Tasks](#tasks)
* [Pipelines](#pipelines)
* [Users](#users)
* [Tags](#tags)
* [Country](#country)
* [Organisations](#organisations)
* [ProjectCategories](#projectcategories)
* [Email](#email)
* [Currency](#currency)
* [Teams](#teams)
* [Contact](#contact)
* [Comment](#comment)
* [File](#file)
* [CustomField](#customfield)
* [TeamMembers](#teammembers)
* [Opportunity](#opportunity)
* [Events](#events)
* [Projects](#projects)
* [PipelineStages](#pipelinestages)

## <a name="relationships"></a>Relationships

#### Methods:

* [list](#relationshipslist)


### <a name="relationshipslist"></a>Relationships::list()

```php
Relationships->list();
```

* **Method:** `GET`

* **Endpoint:** */Relationships*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships'`

## <a name="taskcategories"></a>TaskCategories

#### Methods:

* [add](#taskcategoriesadd)
* [delete](#taskcategoriesdelete)
* [list](#taskcategorieslist)
* [update](#taskcategoriesupdate)
* [get](#taskcategoriesget)


### <a name="taskcategoriesadd"></a>TaskCategories::add()

```php
TaskCategories->add(task_category);
```

* **Method:** `POST`

* **Endpoint:** */Relationships*

* **Parameters:**

  * task_category **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships'`


### <a name="taskcategoriesdelete"></a>TaskCategories::delete()

```php
TaskCategories->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{id}'`


### <a name="taskcategorieslist"></a>TaskCategories::list()

```php
TaskCategories->list();
```

* **Method:** `GET`

* **Endpoint:** */Relationships*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships'`


### <a name="taskcategoriesupdate"></a>TaskCategories::update()

```php
TaskCategories->update(task_category);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * task_category **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="taskcategoriesget"></a>TaskCategories::get()

```php
TaskCategories->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`

## <a name="tasks"></a>Tasks

#### Methods:

* [add_comment](#tasksaddcomment)
* [get](#tasksget)
* [list](#taskslist)
* [update](#tasksupdate)
* [add](#tasksadd)
* [get_comments](#tasksgetcomments)
* [delete](#tasksdelete)


### <a name="tasksaddcomment"></a>Tasks::add_comment()

```php
Tasks->add_comment(c_id, task_comment);
```

* **Method:** `POST`

* **Endpoint:** */Relationships/{c_id}/Comments*

* **Parameters:**

  * c_id **required**
  * task_comment **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships/{c_id}/Comments'`


### <a name="tasksget"></a>Tasks::get()

```php
Tasks->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`


### <a name="taskslist"></a>Tasks::list()

```php
Tasks->list([id]);
```

* **Method:** `GET`

* **Endpoint:** */Relationships?ids={id:}*

* **Parameters:**

  * [id] *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships?ids={id:}'`


### <a name="tasksupdate"></a>Tasks::update()

```php
Tasks->update(task);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * task **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="tasksadd"></a>Tasks::add()

```php
Tasks->add(task);
```

* **Method:** `POST`

* **Endpoint:** */Relationships*

* **Parameters:**

  * task **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships'`


### <a name="tasksgetcomments"></a>Tasks::get_comments()

```php
Tasks->get_comments(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{c_id}/Comments*

* **Parameters:**

  * c_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{c_id}/Comments'`


### <a name="tasksdelete"></a>Tasks::delete()

```php
Tasks->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{id}'`

## <a name="pipelines"></a>Pipelines

#### Methods:

* [list](#pipelineslist)
* [get](#pipelinesget)


### <a name="pipelineslist"></a>Pipelines::list()

```php
Pipelines->list();
```

* **Method:** `GET`

* **Endpoint:** */Relationships*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships'`


### <a name="pipelinesget"></a>Pipelines::get()

```php
Pipelines->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`

## <a name="users"></a>Users

#### Methods:

* [list](#userslist)
* [get](#usersget)


### <a name="userslist"></a>Users::list()

```php
Users->list();
```

* **Method:** `GET`

* **Endpoint:** */Relationships*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships'`


### <a name="usersget"></a>Users::get()

```php
Users->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`

## <a name="tags"></a>Tags

#### Methods:

* [list](#tagslist)


### <a name="tagslist"></a>Tags::list()

```php
Tags->list(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`

## <a name="country"></a>Country

#### Methods:

* [list](#countrylist)


### <a name="countrylist"></a>Country::list()

```php
Country->list();
```

* **Method:** `GET`

* **Endpoint:** */Countries*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Countries'`

## <a name="organisations"></a>Organisations

#### Methods:

* [add_image](#organisationsaddimage)
* [tasks](#organisationstasks)
* [get](#organisationsget)
* [notes](#organisationsnotes)
* [list](#organisationslist)
* [update](#organisationsupdate)
* [delete_image](#organisationsdeleteimage)
* [add](#organisationsadd)
* [get_image](#organisationsgetimage)
* [update_image](#organisationsupdateimage)
* [emails](#organisationsemails)
* [delete](#organisationsdelete)


### <a name="organisationsaddimage"></a>Organisations::add_image()

```php
Organisations->add_image(c_id, filename, image);
```

* **Method:** `POST`

* **Endpoint:** */Relationships/{c_id}/Image/{filename}*

* **Parameters:**

  * c_id **required**
  * filename **required**
  * image **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships/{c_id}/Image/{filename}'`


### <a name="organisationstasks"></a>Organisations::tasks()

```php
Organisations->tasks(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{c_id}/Tasks*

* **Parameters:**

  * c_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{c_id}/Tasks'`


### <a name="organisationsget"></a>Organisations::get()

```php
Organisations->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`


### <a name="organisationsnotes"></a>Organisations::notes()

```php
Organisations->notes(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{c_id}/Notes*

* **Parameters:**

  * c_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{c_id}/Notes'`


### <a name="organisationslist"></a>Organisations::list()

```php
Organisations->list([ids][, domain][, tag]);
```

* **Method:** `GET`

* **Endpoint:** */Relationships?ids={ids:}&domain={domain:}&tag={tag:}*

* **Parameters:**

  * [ids] *optional*
  * [domain] *optional*
  * [tag] *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships?ids={ids:}&domain={domain:}&tag={tag:}'`


### <a name="organisationsupdate"></a>Organisations::update()

```php
Organisations->update(organisation);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * organisation **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="organisationsdeleteimage"></a>Organisations::delete_image()

```php
Organisations->delete_image(c_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{c_id}/Image*

* **Parameters:**

  * c_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{c_id}/Image'`


### <a name="organisationsadd"></a>Organisations::add()

```php
Organisations->add(organisation);
```

* **Method:** `POST`

* **Endpoint:** */Relationships*

* **Parameters:**

  * organisation **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships'`


### <a name="organisationsgetimage"></a>Organisations::get_image()

```php
Organisations->get_image(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{c_id}/Image*

* **Parameters:**

  * c_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{c_id}/Image'`


### <a name="organisationsupdateimage"></a>Organisations::update_image()

```php
Organisations->update_image(c_id, filename, image);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships/{c_id}/Image/{filename}*

* **Parameters:**

  * c_id **required**
  * filename **required**
  * image **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships/{c_id}/Image/{filename}'`


### <a name="organisationsemails"></a>Organisations::emails()

```php
Organisations->emails(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{c_id}/Emails*

* **Parameters:**

  * c_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{c_id}/Emails'`


### <a name="organisationsdelete"></a>Organisations::delete()

```php
Organisations->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{id}'`

## <a name="projectcategories"></a>ProjectCategories

#### Methods:

* [add](#projectcategoriesadd)
* [delete](#projectcategoriesdelete)
* [list](#projectcategorieslist)
* [update](#projectcategoriesupdate)
* [get](#projectcategoriesget)


### <a name="projectcategoriesadd"></a>ProjectCategories::add()

```php
ProjectCategories->add(project_category);
```

* **Method:** `POST`

* **Endpoint:** */Relationships*

* **Parameters:**

  * project_category **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships'`


### <a name="projectcategoriesdelete"></a>ProjectCategories::delete()

```php
ProjectCategories->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{id}'`


### <a name="projectcategorieslist"></a>ProjectCategories::list()

```php
ProjectCategories->list();
```

* **Method:** `GET`

* **Endpoint:** */Relationships*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships'`


### <a name="projectcategoriesupdate"></a>ProjectCategories::update()

```php
ProjectCategories->update(project_category);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * project_category **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="projectcategoriesget"></a>ProjectCategories::get()

```php
ProjectCategories->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`

## <a name="email"></a>Email

#### Methods:

* [list](#emaillist)
* [delete](#emaildelete)
* [post_comment](#emailpostcomment)
* [comments](#emailcomments)
* [get](#emailget)


### <a name="emaillist"></a>Email::list()

```php
Email->list([ids][, tag]);
```

* **Method:** `GET`

* **Endpoint:** */Relationships?ids={ids:}&tag={tag:}*

* **Parameters:**

  * [ids] *optional*
  * [tag] *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships?ids={ids:}&tag={tag:}'`


### <a name="emaildelete"></a>Email::delete()

```php
Email->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{id}'`


### <a name="emailpostcomment"></a>Email::post_comment()

```php
Email->post_comment(c_id, data);
```

* **Method:** `POST`

* **Endpoint:** */Relationships/{c_id}/Comments*

* **Parameters:**

  * c_id **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships/{c_id}/Comments'`


### <a name="emailcomments"></a>Email::comments()

```php
Email->comments(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{c_id}/Comments*

* **Parameters:**

  * c_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{c_id}/Comments'`


### <a name="emailget"></a>Email::get()

```php
Email->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`

## <a name="currency"></a>Currency

#### Methods:

* [list](#currencylist)


### <a name="currencylist"></a>Currency::list()

```php
Currency->list();
```

* **Method:** `GET`

* **Endpoint:** */Currencies*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Currencies'`

## <a name="teams"></a>Teams

#### Methods:

* [add](#teamsadd)
* [delete](#teamsdelete)
* [list](#teamslist)
* [update](#teamsupdate)
* [get](#teamsget)


### <a name="teamsadd"></a>Teams::add()

```php
Teams->add(team);
```

* **Method:** `POST`

* **Endpoint:** */Relationships*

* **Parameters:**

  * team **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships'`


### <a name="teamsdelete"></a>Teams::delete()

```php
Teams->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{id}'`


### <a name="teamslist"></a>Teams::list()

```php
Teams->list();
```

* **Method:** `GET`

* **Endpoint:** */Relationships*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships'`


### <a name="teamsupdate"></a>Teams::update()

```php
Teams->update(team);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * team **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="teamsget"></a>Teams::get()

```php
Teams->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`

## <a name="contact"></a>Contact

#### Methods:

* [getTasks](#contactgettasks)
* [getNotes](#contactgetnotes)
* [getEmail](#contactgetemail)
* [get](#contactget)
* [list](#contactlist)
* [update](#contactupdate)
* [addImage](#contactaddimage)
* [add](#contactadd)
* [updateImage](#contactupdateimage)
* [getImage](#contactgetimage)
* [deleteImage](#contactdeleteimage)
* [delete](#contactdelete)


### <a name="contactgettasks"></a>Contact::getTasks()

```php
Contact->getTasks(contact_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{contact_id}/Tasks*

* **Parameters:**

  * contact_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{contact_id}/Tasks'`


### <a name="contactgetnotes"></a>Contact::getNotes()

```php
Contact->getNotes(contact_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{contact_id}/Notes*

* **Parameters:**

  * contact_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{contact_id}/Notes'`


### <a name="contactgetemail"></a>Contact::getEmail()

```php
Contact->getEmail(contact_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{contact_id}/Emails*

* **Parameters:**

  * contact_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{contact_id}/Emails'`


### <a name="contactget"></a>Contact::get()

```php
Contact->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`


### <a name="contactlist"></a>Contact::list()

```php
Contact->list([ids][, email][, tag]);
```

* **Method:** `GET`

* **Endpoint:** */Relationships?ids={ids:}&email={email:}&tag={tag:}*

* **Parameters:**

  * [ids] *optional*
  * [email] *optional*
  * [tag] *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships?ids={ids:}&email={email:}&tag={tag:}'`


### <a name="contactupdate"></a>Contact::update()

```php
Contact->update(data);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="contactaddimage"></a>Contact::addImage()

```php
Contact->addImage(contact_id, filename, data);
```

* **Method:** `POST`

* **Endpoint:** */Relationships/{contact_id}/Image/{filename}*

* **Parameters:**

  * contact_id **required**
  * filename **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships/{contact_id}/Image/{filename}'`


### <a name="contactadd"></a>Contact::add()

```php
Contact->add(data);
```

* **Method:** `POST`

* **Endpoint:** */Relationships*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships'`


### <a name="contactupdateimage"></a>Contact::updateImage()

```php
Contact->updateImage(contact_id, filename, data);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships/{contact_id}/Image/{filename}*

* **Parameters:**

  * contact_id **required**
  * filename **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships/{contact_id}/Image/{filename}'`


### <a name="contactgetimage"></a>Contact::getImage()

```php
Contact->getImage(contact_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{contact_id}/Image*

* **Parameters:**

  * contact_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{contact_id}/Image'`


### <a name="contactdeleteimage"></a>Contact::deleteImage()

```php
Contact->deleteImage(contact_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{contact_id}/Image*

* **Parameters:**

  * contact_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{contact_id}/Image'`


### <a name="contactdelete"></a>Contact::delete()

```php
Contact->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{id}'`

## <a name="comment"></a>Comment

#### Methods:

* [get](#commentget)
* [attachFile](#commentattachfile)
* [update](#commentupdate)
* [delete](#commentdelete)


### <a name="commentget"></a>Comment::get()

```php
Comment->get(comment_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{comment_id}*

* **Parameters:**

  * comment_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{comment_id}'`


### <a name="commentattachfile"></a>Comment::attachFile()

```php
Comment->attachFile(comment_id, filename, data);
```

* **Method:** `POST`

* **Endpoint:** */Relationships?c_id={comment_id}&filename={filename}*

* **Parameters:**

  * comment_id **required**
  * filename **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships?c_id={comment_id}&filename={filename}'`


### <a name="commentupdate"></a>Comment::update()

```php
Comment->update(data);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="commentdelete"></a>Comment::delete()

```php
Comment->delete(comment_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{comment_id}*

* **Parameters:**

  * comment_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{comment_id}'`

## <a name="file"></a>File

#### Resources:

* [Category](#filecategory)
* [Attachment](#fileattachment)

## <a name="filecategory"></a>File::Category

#### Methods:

* [add](#filecategoryadd)
* [delete](#filecategorydelete)
* [list](#filecategorylist)
* [update](#filecategoryupdate)
* [get](#filecategoryget)


### <a name="filecategoryadd"></a>File::Category::add()

```php
File->Category->add(data);
```

* **Method:** `POST`

* **Endpoint:** */Relationships*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships'`


### <a name="filecategorydelete"></a>File::Category::delete()

```php
File->Category->delete(file_category_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{file_category_id}*

* **Parameters:**

  * file_category_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{file_category_id}'`


### <a name="filecategorylist"></a>File::Category::list()

```php
File->Category->list();
```

* **Method:** `GET`

* **Endpoint:** */Relationships*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships'`


### <a name="filecategoryupdate"></a>File::Category::update()

```php
File->Category->update(data);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="filecategoryget"></a>File::Category::get()

```php
File->Category->get(file_category_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{file_category_id}*

* **Parameters:**

  * file_category_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{file_category_id}'`

## <a name="fileattachment"></a>File::Attachment

#### Methods:

* [get](#fileattachmentget)


### <a name="fileattachmentget"></a>File::Attachment::get()

```php
File->Attachment->get(file_attachment_id);
```

* **Method:** `GET`

* **Endpoint:** */FileAttachments/{file_attachment_id}*

* **Parameters:**

  * file_attachment_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/FileAttachments/{file_attachment_id}'`

## <a name="customfield"></a>CustomField

#### Methods:

* [list](#customfieldlist)
* [get](#customfieldget)


### <a name="customfieldlist"></a>CustomField::list()

```php
CustomField->list();
```

* **Method:** `GET`

* **Endpoint:** */Relationships*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships'`


### <a name="customfieldget"></a>CustomField::get()

```php
CustomField->get(custom_field_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{custom_field_id}*

* **Parameters:**

  * custom_field_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{custom_field_id}'`

## <a name="teammembers"></a>TeamMembers

#### Methods:

* [add](#teammembersadd)
* [delete](#teammembersdelete)
* [list](#teammemberslist)
* [update](#teammembersupdate)
* [get](#teammembersget)


### <a name="teammembersadd"></a>TeamMembers::add()

```php
TeamMembers->add(team_member);
```

* **Method:** `POST`

* **Endpoint:** */Relationships*

* **Parameters:**

  * team_member **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships'`


### <a name="teammembersdelete"></a>TeamMembers::delete()

```php
TeamMembers->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{id}'`


### <a name="teammemberslist"></a>TeamMembers::list()

```php
TeamMembers->list([teamid]);
```

* **Method:** `GET`

* **Endpoint:** */Relationships?teamid={teamid:}*

* **Parameters:**

  * [teamid] *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships?teamid={teamid:}'`


### <a name="teammembersupdate"></a>TeamMembers::update()

```php
TeamMembers->update(team_member);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * team_member **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="teammembersget"></a>TeamMembers::get()

```php
TeamMembers->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`

## <a name="opportunity"></a>Opportunity

#### Resources:

* [Category](#opportunitycategory)
* [StateReasons](#opportunitystatereasons)

#### Methods:

* [getTasks](#opportunitygettasks)
* [getNotes](#opportunitygetnotes)
* [get](#opportunityget)
* [list](#opportunitylist)
* [update](#opportunityupdate)
* [getStateHistory](#opportunitygetstatehistory)
* [addImage](#opportunityaddimage)
* [add](#opportunityadd)
* [updateImage](#opportunityupdateimage)
* [getImage](#opportunitygetimage)
* [deleteImage](#opportunitydeleteimage)
* [getEmails](#opportunitygetemails)
* [delete](#opportunitydelete)


### <a name="opportunitygettasks"></a>Opportunity::getTasks()

```php
Opportunity->getTasks(opportunity_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{opportunity_id}/Tasks*

* **Parameters:**

  * opportunity_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{opportunity_id}/Tasks'`


### <a name="opportunitygetnotes"></a>Opportunity::getNotes()

```php
Opportunity->getNotes(opportunity_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{opportunity_id}/Notes*

* **Parameters:**

  * opportunity_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{opportunity_id}/Notes'`


### <a name="opportunityget"></a>Opportunity::get()

```php
Opportunity->get(opportunity_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{opportunity_id}*

* **Parameters:**

  * opportunity_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{opportunity_id}'`


### <a name="opportunitylist"></a>Opportunity::list()

```php
Opportunity->list([ids][, tag]);
```

* **Method:** `GET`

* **Endpoint:** */Relationships?ids={ids:}&tag={tag:}*

* **Parameters:**

  * [ids] *optional*
  * [tag] *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships?ids={ids:}&tag={tag:}'`


### <a name="opportunityupdate"></a>Opportunity::update()

```php
Opportunity->update(data);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="opportunitygetstatehistory"></a>Opportunity::getStateHistory()

```php
Opportunity->getStateHistory(opportunity_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{opportunity_id}/StateHistory*

* **Parameters:**

  * opportunity_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{opportunity_id}/StateHistory'`


### <a name="opportunityaddimage"></a>Opportunity::addImage()

```php
Opportunity->addImage(opportunity_id, filename, data);
```

* **Method:** `POST`

* **Endpoint:** */Relationships/{opportunity_id}/Image/{filename}*

* **Parameters:**

  * opportunity_id **required**
  * filename **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships/{opportunity_id}/Image/{filename}'`


### <a name="opportunityadd"></a>Opportunity::add()

```php
Opportunity->add(data);
```

* **Method:** `POST`

* **Endpoint:** */Relationships*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships'`


### <a name="opportunityupdateimage"></a>Opportunity::updateImage()

```php
Opportunity->updateImage(opportunity_id, filename, data);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships/{opportunity_id}/Image/{filename}*

* **Parameters:**

  * opportunity_id **required**
  * filename **required**
  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships/{opportunity_id}/Image/{filename}'`


### <a name="opportunitygetimage"></a>Opportunity::getImage()

```php
Opportunity->getImage(opportunity_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{opportunity_id}/Image*

* **Parameters:**

  * opportunity_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{opportunity_id}/Image'`


### <a name="opportunitydeleteimage"></a>Opportunity::deleteImage()

```php
Opportunity->deleteImage(opportunity_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{opportunity_id}/Image*

* **Parameters:**

  * opportunity_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{opportunity_id}/Image'`


### <a name="opportunitygetemails"></a>Opportunity::getEmails()

```php
Opportunity->getEmails(opportunity_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{opportunity_id}/Emails*

* **Parameters:**

  * opportunity_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{opportunity_id}/Emails'`


### <a name="opportunitydelete"></a>Opportunity::delete()

```php
Opportunity->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{id}'`

## <a name="opportunitycategory"></a>Opportunity::Category

#### Methods:

* [add](#opportunitycategoryadd)
* [delete](#opportunitycategorydelete)
* [list](#opportunitycategorylist)
* [update](#opportunitycategoryupdate)
* [get](#opportunitycategoryget)


### <a name="opportunitycategoryadd"></a>Opportunity::Category::add()

```php
Opportunity->Category->add(data);
```

* **Method:** `POST`

* **Endpoint:** */Relationships*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships'`


### <a name="opportunitycategorydelete"></a>Opportunity::Category::delete()

```php
Opportunity->Category->delete(opportunity_category_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{opportunity_category_id}*

* **Parameters:**

  * opportunity_category_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{opportunity_category_id}'`


### <a name="opportunitycategorylist"></a>Opportunity::Category::list()

```php
Opportunity->Category->list();
```

* **Method:** `GET`

* **Endpoint:** */Relationships*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships'`


### <a name="opportunitycategoryupdate"></a>Opportunity::Category::update()

```php
Opportunity->Category->update(data);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="opportunitycategoryget"></a>Opportunity::Category::get()

```php
Opportunity->Category->get(opportunity_category_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{opportunity_category_id}*

* **Parameters:**

  * opportunity_category_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{opportunity_category_id}'`

## <a name="opportunitystatereasons"></a>Opportunity::StateReasons

#### Methods:

* [list](#opportunitystatereasonslist)


### <a name="opportunitystatereasonslist"></a>Opportunity::StateReasons::list()

```php
Opportunity->StateReasons->list();
```

* **Method:** `GET`

* **Endpoint:** */OpportunityStateReasons*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/OpportunityStateReasons'`

## <a name="events"></a>Events

#### Methods:

* [add](#eventsadd)
* [delete](#eventsdelete)
* [list](#eventslist)
* [update](#eventsupdate)
* [get](#eventsget)


### <a name="eventsadd"></a>Events::add()

```php
Events->add(data);
```

* **Method:** `POST`

* **Endpoint:** */Relationships*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships'`


### <a name="eventsdelete"></a>Events::delete()

```php
Events->delete(event_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{event_id}*

* **Parameters:**

  * event_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{event_id}'`


### <a name="eventslist"></a>Events::list()

```php
Events->list();
```

* **Method:** `GET`

* **Endpoint:** */Relationships*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships'`


### <a name="eventsupdate"></a>Events::update()

```php
Events->update(data);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * data **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="eventsget"></a>Events::get()

```php
Events->get(event_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{event_id}*

* **Parameters:**

  * event_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{event_id}'`

## <a name="projects"></a>Projects

#### Methods:

* [add_image](#projectsaddimage)
* [tasks](#projectstasks)
* [get](#projectsget)
* [notes](#projectsnotes)
* [list](#projectslist)
* [update](#projectsupdate)
* [delete_image](#projectsdeleteimage)
* [add](#projectsadd)
* [get_image](#projectsgetimage)
* [update_image](#projectsupdateimage)
* [emails](#projectsemails)
* [delete](#projectsdelete)


### <a name="projectsaddimage"></a>Projects::add_image()

```php
Projects->add_image(c_id, filename, image);
```

* **Method:** `POST`

* **Endpoint:** */Relationships/{c_id}/Image/{filename}*

* **Parameters:**

  * c_id **required**
  * filename **required**
  * image **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships/{c_id}/Image/{filename}'`


### <a name="projectstasks"></a>Projects::tasks()

```php
Projects->tasks(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{c_id}/Tasks*

* **Parameters:**

  * c_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{c_id}/Tasks'`


### <a name="projectsget"></a>Projects::get()

```php
Projects->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`


### <a name="projectsnotes"></a>Projects::notes()

```php
Projects->notes(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{c_id}/Notes*

* **Parameters:**

  * c_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{c_id}/Notes'`


### <a name="projectslist"></a>Projects::list()

```php
Projects->list([ids][, tag]);
```

* **Method:** `GET`

* **Endpoint:** *//Relationships?ids={ids:}&tag={tag:}*

* **Parameters:**

  * [ids] *optional*
  * [tag] *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '//Relationships?ids={ids:}&tag={tag:}'`


### <a name="projectsupdate"></a>Projects::update()

```php
Projects->update(project);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships*

* **Parameters:**

  * project **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships'`


### <a name="projectsdeleteimage"></a>Projects::delete_image()

```php
Projects->delete_image(c_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{c_id}/Image*

* **Parameters:**

  * c_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{c_id}/Image'`


### <a name="projectsadd"></a>Projects::add()

```php
Projects->add(project);
```

* **Method:** `POST`

* **Endpoint:** */Relationships*

* **Parameters:**

  * project **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Relationships'`


### <a name="projectsgetimage"></a>Projects::get_image()

```php
Projects->get_image(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{c_id}/Image*

* **Parameters:**

  * c_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{c_id}/Image'`


### <a name="projectsupdateimage"></a>Projects::update_image()

```php
Projects->update_image(c_id, filename, image);
```

* **Method:** `PUT`

* **Endpoint:** */Relationships/{c_id}/Image/{filename}*

* **Parameters:**

  * c_id **required**
  * filename **required**
  * image **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Relationships/{c_id}/Image/{filename}'`


### <a name="projectsemails"></a>Projects::emails()

```php
Projects->emails(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{c_id}/Emails*

* **Parameters:**

  * c_id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{c_id}/Emails'`


### <a name="projectsdelete"></a>Projects::delete()

```php
Projects->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Relationships/{id}'`

## <a name="pipelinestages"></a>PipelineStages

#### Methods:

* [list](#pipelinestageslist)
* [get](#pipelinestagesget)


### <a name="pipelinestageslist"></a>PipelineStages::list()

```php
PipelineStages->list();
```

* **Method:** `GET`

* **Endpoint:** */Relationships*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships'`


### <a name="pipelinestagesget"></a>PipelineStages::get()

```php
PipelineStages->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Relationships/{id}*

* **Parameters:**

  * id **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Relationships/{id}'`

