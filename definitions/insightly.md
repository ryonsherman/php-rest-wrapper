# PHP RESTWrapper

### `insightly` module documentation

#### Resources:

* [Comment](#comment)
* [Contact](#contact)
* [Country](#country)
* [Currency](#currency)
* [CustomField](#customfield)
* [Email](#email)
* [Events](#events)
* [File](#file)
* [Opportunity](#opportunity)
* [Organisations](#organisations)
* [PipelineStages](#pipelinestages)
* [Pipelines](#pipelines)
* [ProjectCategories](#projectcategories)
* [Projects](#projects)
* [Relationships](#relationships)
* [Tags](#tags)
* [TaskCategories](#taskcategories)
* [Tasks](#tasks)
* [TeamMembers](#teammembers)
* [Teams](#teams)
* [Users](#users)

## <a name="comment"></a>Comment

#### Methods:

* [attachFile](#commentattachfile)
* [delete](#commentdelete)
* [get](#commentget)
* [update](#commentupdate)


### <a name="commentattachfile"></a>Comment::attachFile()

```php
Comment->attachFile(comment_id, filename, data);
```

* **Method:** `POST`

* **Endpoint:** */Comments?c_id={comment_id}&filename={filename}*

* **Parameters:**

  * `comment_id` **required**
  * `filename` **required**
  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments?c_id={comment_id}&filename={filename}'`


### <a name="commentdelete"></a>Comment::delete()

```php
Comment->delete(comment_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{comment_id}*

* **Parameters:**

  * `comment_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{comment_id}'`


### <a name="commentget"></a>Comment::get()

```php
Comment->get(comment_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{comment_id}*

* **Parameters:**

  * `comment_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{comment_id}'`


### <a name="commentupdate"></a>Comment::update()

```php
Comment->update(data);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`

## <a name="contact"></a>Contact

#### Methods:

* [add](#contactadd)
* [addImage](#contactaddimage)
* [delete](#contactdelete)
* [deleteImage](#contactdeleteimage)
* [get](#contactget)
* [getEmail](#contactgetemail)
* [getImage](#contactgetimage)
* [getNotes](#contactgetnotes)
* [getTasks](#contactgettasks)
* [list](#contactlist)
* [update](#contactupdate)
* [updateImage](#contactupdateimage)


### <a name="contactadd"></a>Contact::add()

```php
Contact->add(data);
```

* **Method:** `POST`

* **Endpoint:** */Comments*

* **Parameters:**

  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments'`


### <a name="contactaddimage"></a>Contact::addImage()

```php
Contact->addImage(contact_id, filename, data);
```

* **Method:** `POST`

* **Endpoint:** */Comments/{contact_id}/Image/{filename}*

* **Parameters:**

  * `contact_id` **required**
  * `filename` **required**
  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments/{contact_id}/Image/{filename}'`


### <a name="contactdelete"></a>Contact::delete()

```php
Contact->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{id}'`


### <a name="contactdeleteimage"></a>Contact::deleteImage()

```php
Contact->deleteImage(contact_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{contact_id}/Image*

* **Parameters:**

  * `contact_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{contact_id}/Image'`


### <a name="contactget"></a>Contact::get()

```php
Contact->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`


### <a name="contactgetemail"></a>Contact::getEmail()

```php
Contact->getEmail(contact_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{contact_id}/Emails*

* **Parameters:**

  * `contact_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{contact_id}/Emails'`


### <a name="contactgetimage"></a>Contact::getImage()

```php
Contact->getImage(contact_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{contact_id}/Image*

* **Parameters:**

  * `contact_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{contact_id}/Image'`


### <a name="contactgetnotes"></a>Contact::getNotes()

```php
Contact->getNotes(contact_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{contact_id}/Notes*

* **Parameters:**

  * `contact_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{contact_id}/Notes'`


### <a name="contactgettasks"></a>Contact::getTasks()

```php
Contact->getTasks(contact_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{contact_id}/Tasks*

* **Parameters:**

  * `contact_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{contact_id}/Tasks'`


### <a name="contactlist"></a>Contact::list()

```php
Contact->list([ids][, email][, tag]);
```

* **Method:** `GET`

* **Endpoint:** */Comments?ids={ids:}&email={email:}&tag={tag:}*

* **Parameters:**

  * `[ids]` *optional*
  * `[email]` *optional*
  * `[tag]` *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments?ids={ids:}&email={email:}&tag={tag:}'`


### <a name="contactupdate"></a>Contact::update()

```php
Contact->update(data);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`


### <a name="contactupdateimage"></a>Contact::updateImage()

```php
Contact->updateImage(contact_id, filename, data);
```

* **Method:** `PUT`

* **Endpoint:** */Comments/{contact_id}/Image/{filename}*

* **Parameters:**

  * `contact_id` **required**
  * `filename` **required**
  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments/{contact_id}/Image/{filename}'`

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

## <a name="customfield"></a>CustomField

#### Methods:

* [get](#customfieldget)
* [list](#customfieldlist)


### <a name="customfieldget"></a>CustomField::get()

```php
CustomField->get(custom_field_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{custom_field_id}*

* **Parameters:**

  * `custom_field_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{custom_field_id}'`


### <a name="customfieldlist"></a>CustomField::list()

```php
CustomField->list();
```

* **Method:** `GET`

* **Endpoint:** */Comments*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments'`

## <a name="email"></a>Email

#### Methods:

* [comments](#emailcomments)
* [delete](#emaildelete)
* [get](#emailget)
* [list](#emaillist)
* [post_comment](#emailpostcomment)


### <a name="emailcomments"></a>Email::comments()

```php
Email->comments(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{c_id}/Comments*

* **Parameters:**

  * `c_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{c_id}/Comments'`


### <a name="emaildelete"></a>Email::delete()

```php
Email->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{id}'`


### <a name="emailget"></a>Email::get()

```php
Email->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`


### <a name="emaillist"></a>Email::list()

```php
Email->list([ids][, tag]);
```

* **Method:** `GET`

* **Endpoint:** */Comments?ids={ids:}&tag={tag:}*

* **Parameters:**

  * `[ids]` *optional*
  * `[tag]` *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments?ids={ids:}&tag={tag:}'`


### <a name="emailpostcomment"></a>Email::post_comment()

```php
Email->post_comment(c_id, data);
```

* **Method:** `POST`

* **Endpoint:** */Comments/{c_id}/Comments*

* **Parameters:**

  * `c_id` **required**
  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments/{c_id}/Comments'`

## <a name="events"></a>Events

#### Methods:

* [add](#eventsadd)
* [delete](#eventsdelete)
* [get](#eventsget)
* [list](#eventslist)
* [update](#eventsupdate)


### <a name="eventsadd"></a>Events::add()

```php
Events->add(data);
```

* **Method:** `POST`

* **Endpoint:** */Comments*

* **Parameters:**

  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments'`


### <a name="eventsdelete"></a>Events::delete()

```php
Events->delete(event_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{event_id}*

* **Parameters:**

  * `event_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{event_id}'`


### <a name="eventsget"></a>Events::get()

```php
Events->get(event_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{event_id}*

* **Parameters:**

  * `event_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{event_id}'`


### <a name="eventslist"></a>Events::list()

```php
Events->list();
```

* **Method:** `GET`

* **Endpoint:** */Comments*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments'`


### <a name="eventsupdate"></a>Events::update()

```php
Events->update(data);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`

## <a name="file"></a>File

#### Resources:

* [Attachment](#fileattachment)
* [Category](#filecategory)

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

  * `file_attachment_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/FileAttachments/{file_attachment_id}'`

## <a name="filecategory"></a>File::Category

#### Methods:

* [add](#filecategoryadd)
* [delete](#filecategorydelete)
* [get](#filecategoryget)
* [list](#filecategorylist)
* [update](#filecategoryupdate)


### <a name="filecategoryadd"></a>File::Category::add()

```php
File->Category->add(data);
```

* **Method:** `POST`

* **Endpoint:** */Comments*

* **Parameters:**

  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments'`


### <a name="filecategorydelete"></a>File::Category::delete()

```php
File->Category->delete(file_category_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{file_category_id}*

* **Parameters:**

  * `file_category_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{file_category_id}'`


### <a name="filecategoryget"></a>File::Category::get()

```php
File->Category->get(file_category_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{file_category_id}*

* **Parameters:**

  * `file_category_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{file_category_id}'`


### <a name="filecategorylist"></a>File::Category::list()

```php
File->Category->list();
```

* **Method:** `GET`

* **Endpoint:** */Comments*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments'`


### <a name="filecategoryupdate"></a>File::Category::update()

```php
File->Category->update(data);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`

## <a name="opportunity"></a>Opportunity

#### Resources:

* [Category](#opportunitycategory)
* [StateReasons](#opportunitystatereasons)

#### Methods:

* [add](#opportunityadd)
* [addImage](#opportunityaddimage)
* [delete](#opportunitydelete)
* [deleteImage](#opportunitydeleteimage)
* [get](#opportunityget)
* [getEmails](#opportunitygetemails)
* [getImage](#opportunitygetimage)
* [getNotes](#opportunitygetnotes)
* [getStateHistory](#opportunitygetstatehistory)
* [getTasks](#opportunitygettasks)
* [list](#opportunitylist)
* [update](#opportunityupdate)
* [updateImage](#opportunityupdateimage)


### <a name="opportunityadd"></a>Opportunity::add()

```php
Opportunity->add(data);
```

* **Method:** `POST`

* **Endpoint:** */Comments*

* **Parameters:**

  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments'`


### <a name="opportunityaddimage"></a>Opportunity::addImage()

```php
Opportunity->addImage(opportunity_id, filename, data);
```

* **Method:** `POST`

* **Endpoint:** */Comments/{opportunity_id}/Image/{filename}*

* **Parameters:**

  * `opportunity_id` **required**
  * `filename` **required**
  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments/{opportunity_id}/Image/{filename}'`


### <a name="opportunitydelete"></a>Opportunity::delete()

```php
Opportunity->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{id}'`


### <a name="opportunitydeleteimage"></a>Opportunity::deleteImage()

```php
Opportunity->deleteImage(opportunity_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{opportunity_id}/Image*

* **Parameters:**

  * `opportunity_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{opportunity_id}/Image'`


### <a name="opportunityget"></a>Opportunity::get()

```php
Opportunity->get(opportunity_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{opportunity_id}*

* **Parameters:**

  * `opportunity_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{opportunity_id}'`


### <a name="opportunitygetemails"></a>Opportunity::getEmails()

```php
Opportunity->getEmails(opportunity_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{opportunity_id}/Emails*

* **Parameters:**

  * `opportunity_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{opportunity_id}/Emails'`


### <a name="opportunitygetimage"></a>Opportunity::getImage()

```php
Opportunity->getImage(opportunity_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{opportunity_id}/Image*

* **Parameters:**

  * `opportunity_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{opportunity_id}/Image'`


### <a name="opportunitygetnotes"></a>Opportunity::getNotes()

```php
Opportunity->getNotes(opportunity_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{opportunity_id}/Notes*

* **Parameters:**

  * `opportunity_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{opportunity_id}/Notes'`


### <a name="opportunitygetstatehistory"></a>Opportunity::getStateHistory()

```php
Opportunity->getStateHistory(opportunity_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{opportunity_id}/StateHistory*

* **Parameters:**

  * `opportunity_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{opportunity_id}/StateHistory'`


### <a name="opportunitygettasks"></a>Opportunity::getTasks()

```php
Opportunity->getTasks(opportunity_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{opportunity_id}/Tasks*

* **Parameters:**

  * `opportunity_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{opportunity_id}/Tasks'`


### <a name="opportunitylist"></a>Opportunity::list()

```php
Opportunity->list([ids][, tag]);
```

* **Method:** `GET`

* **Endpoint:** */Comments?ids={ids:}&tag={tag:}*

* **Parameters:**

  * `[ids]` *optional*
  * `[tag]` *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments?ids={ids:}&tag={tag:}'`


### <a name="opportunityupdate"></a>Opportunity::update()

```php
Opportunity->update(data);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`


### <a name="opportunityupdateimage"></a>Opportunity::updateImage()

```php
Opportunity->updateImage(opportunity_id, filename, data);
```

* **Method:** `PUT`

* **Endpoint:** */Comments/{opportunity_id}/Image/{filename}*

* **Parameters:**

  * `opportunity_id` **required**
  * `filename` **required**
  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments/{opportunity_id}/Image/{filename}'`

## <a name="opportunitycategory"></a>Opportunity::Category

#### Methods:

* [add](#opportunitycategoryadd)
* [delete](#opportunitycategorydelete)
* [get](#opportunitycategoryget)
* [list](#opportunitycategorylist)
* [update](#opportunitycategoryupdate)


### <a name="opportunitycategoryadd"></a>Opportunity::Category::add()

```php
Opportunity->Category->add(data);
```

* **Method:** `POST`

* **Endpoint:** */Comments*

* **Parameters:**

  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments'`


### <a name="opportunitycategorydelete"></a>Opportunity::Category::delete()

```php
Opportunity->Category->delete(opportunity_category_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{opportunity_category_id}*

* **Parameters:**

  * `opportunity_category_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{opportunity_category_id}'`


### <a name="opportunitycategoryget"></a>Opportunity::Category::get()

```php
Opportunity->Category->get(opportunity_category_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{opportunity_category_id}*

* **Parameters:**

  * `opportunity_category_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{opportunity_category_id}'`


### <a name="opportunitycategorylist"></a>Opportunity::Category::list()

```php
Opportunity->Category->list();
```

* **Method:** `GET`

* **Endpoint:** */Comments*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments'`


### <a name="opportunitycategoryupdate"></a>Opportunity::Category::update()

```php
Opportunity->Category->update(data);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `data` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`

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

## <a name="organisations"></a>Organisations

#### Methods:

* [add](#organisationsadd)
* [add_image](#organisationsaddimage)
* [delete](#organisationsdelete)
* [delete_image](#organisationsdeleteimage)
* [emails](#organisationsemails)
* [get](#organisationsget)
* [get_image](#organisationsgetimage)
* [list](#organisationslist)
* [notes](#organisationsnotes)
* [tasks](#organisationstasks)
* [update](#organisationsupdate)
* [update_image](#organisationsupdateimage)


### <a name="organisationsadd"></a>Organisations::add()

```php
Organisations->add(organisation);
```

* **Method:** `POST`

* **Endpoint:** */Comments*

* **Parameters:**

  * `organisation` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments'`


### <a name="organisationsaddimage"></a>Organisations::add_image()

```php
Organisations->add_image(c_id, filename, image);
```

* **Method:** `POST`

* **Endpoint:** */Comments/{c_id}/Image/{filename}*

* **Parameters:**

  * `c_id` **required**
  * `filename` **required**
  * `image` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments/{c_id}/Image/{filename}'`


### <a name="organisationsdelete"></a>Organisations::delete()

```php
Organisations->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{id}'`


### <a name="organisationsdeleteimage"></a>Organisations::delete_image()

```php
Organisations->delete_image(c_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{c_id}/Image*

* **Parameters:**

  * `c_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{c_id}/Image'`


### <a name="organisationsemails"></a>Organisations::emails()

```php
Organisations->emails(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{c_id}/Emails*

* **Parameters:**

  * `c_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{c_id}/Emails'`


### <a name="organisationsget"></a>Organisations::get()

```php
Organisations->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`


### <a name="organisationsgetimage"></a>Organisations::get_image()

```php
Organisations->get_image(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{c_id}/Image*

* **Parameters:**

  * `c_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{c_id}/Image'`


### <a name="organisationslist"></a>Organisations::list()

```php
Organisations->list([ids][, domain][, tag]);
```

* **Method:** `GET`

* **Endpoint:** */Comments?ids={ids:}&domain={domain:}&tag={tag:}*

* **Parameters:**

  * `[ids]` *optional*
  * `[domain]` *optional*
  * `[tag]` *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments?ids={ids:}&domain={domain:}&tag={tag:}'`


### <a name="organisationsnotes"></a>Organisations::notes()

```php
Organisations->notes(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{c_id}/Notes*

* **Parameters:**

  * `c_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{c_id}/Notes'`


### <a name="organisationstasks"></a>Organisations::tasks()

```php
Organisations->tasks(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{c_id}/Tasks*

* **Parameters:**

  * `c_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{c_id}/Tasks'`


### <a name="organisationsupdate"></a>Organisations::update()

```php
Organisations->update(organisation);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `organisation` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`


### <a name="organisationsupdateimage"></a>Organisations::update_image()

```php
Organisations->update_image(c_id, filename, image);
```

* **Method:** `PUT`

* **Endpoint:** */Comments/{c_id}/Image/{filename}*

* **Parameters:**

  * `c_id` **required**
  * `filename` **required**
  * `image` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments/{c_id}/Image/{filename}'`

## <a name="pipelinestages"></a>PipelineStages

#### Methods:

* [get](#pipelinestagesget)
* [list](#pipelinestageslist)


### <a name="pipelinestagesget"></a>PipelineStages::get()

```php
PipelineStages->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`


### <a name="pipelinestageslist"></a>PipelineStages::list()

```php
PipelineStages->list();
```

* **Method:** `GET`

* **Endpoint:** */Comments*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments'`

## <a name="pipelines"></a>Pipelines

#### Methods:

* [get](#pipelinesget)
* [list](#pipelineslist)


### <a name="pipelinesget"></a>Pipelines::get()

```php
Pipelines->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`


### <a name="pipelineslist"></a>Pipelines::list()

```php
Pipelines->list();
```

* **Method:** `GET`

* **Endpoint:** */Comments*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments'`

## <a name="projectcategories"></a>ProjectCategories

#### Methods:

* [add](#projectcategoriesadd)
* [delete](#projectcategoriesdelete)
* [get](#projectcategoriesget)
* [list](#projectcategorieslist)
* [update](#projectcategoriesupdate)


### <a name="projectcategoriesadd"></a>ProjectCategories::add()

```php
ProjectCategories->add(project_category);
```

* **Method:** `POST`

* **Endpoint:** */Comments*

* **Parameters:**

  * `project_category` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments'`


### <a name="projectcategoriesdelete"></a>ProjectCategories::delete()

```php
ProjectCategories->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{id}'`


### <a name="projectcategoriesget"></a>ProjectCategories::get()

```php
ProjectCategories->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`


### <a name="projectcategorieslist"></a>ProjectCategories::list()

```php
ProjectCategories->list();
```

* **Method:** `GET`

* **Endpoint:** */Comments*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments'`


### <a name="projectcategoriesupdate"></a>ProjectCategories::update()

```php
ProjectCategories->update(project_category);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `project_category` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`

## <a name="projects"></a>Projects

#### Methods:

* [add](#projectsadd)
* [add_image](#projectsaddimage)
* [delete](#projectsdelete)
* [delete_image](#projectsdeleteimage)
* [emails](#projectsemails)
* [get](#projectsget)
* [get_image](#projectsgetimage)
* [list](#projectslist)
* [notes](#projectsnotes)
* [tasks](#projectstasks)
* [update](#projectsupdate)
* [update_image](#projectsupdateimage)


### <a name="projectsadd"></a>Projects::add()

```php
Projects->add(project);
```

* **Method:** `POST`

* **Endpoint:** */Comments*

* **Parameters:**

  * `project` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments'`


### <a name="projectsaddimage"></a>Projects::add_image()

```php
Projects->add_image(c_id, filename, image);
```

* **Method:** `POST`

* **Endpoint:** */Comments/{c_id}/Image/{filename}*

* **Parameters:**

  * `c_id` **required**
  * `filename` **required**
  * `image` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments/{c_id}/Image/{filename}'`


### <a name="projectsdelete"></a>Projects::delete()

```php
Projects->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{id}'`


### <a name="projectsdeleteimage"></a>Projects::delete_image()

```php
Projects->delete_image(c_id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{c_id}/Image*

* **Parameters:**

  * `c_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{c_id}/Image'`


### <a name="projectsemails"></a>Projects::emails()

```php
Projects->emails(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{c_id}/Emails*

* **Parameters:**

  * `c_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{c_id}/Emails'`


### <a name="projectsget"></a>Projects::get()

```php
Projects->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`


### <a name="projectsgetimage"></a>Projects::get_image()

```php
Projects->get_image(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{c_id}/Image*

* **Parameters:**

  * `c_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{c_id}/Image'`


### <a name="projectslist"></a>Projects::list()

```php
Projects->list([ids][, tag]);
```

* **Method:** `GET`

* **Endpoint:** *//Comments?ids={ids:}&tag={tag:}*

* **Parameters:**

  * `[ids]` *optional*
  * `[tag]` *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '//Comments?ids={ids:}&tag={tag:}'`


### <a name="projectsnotes"></a>Projects::notes()

```php
Projects->notes(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{c_id}/Notes*

* **Parameters:**

  * `c_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{c_id}/Notes'`


### <a name="projectstasks"></a>Projects::tasks()

```php
Projects->tasks(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{c_id}/Tasks*

* **Parameters:**

  * `c_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{c_id}/Tasks'`


### <a name="projectsupdate"></a>Projects::update()

```php
Projects->update(project);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `project` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`


### <a name="projectsupdateimage"></a>Projects::update_image()

```php
Projects->update_image(c_id, filename, image);
```

* **Method:** `PUT`

* **Endpoint:** */Comments/{c_id}/Image/{filename}*

* **Parameters:**

  * `c_id` **required**
  * `filename` **required**
  * `image` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments/{c_id}/Image/{filename}'`

## <a name="relationships"></a>Relationships

#### Methods:

* [list](#relationshipslist)


### <a name="relationshipslist"></a>Relationships::list()

```php
Relationships->list();
```

* **Method:** `GET`

* **Endpoint:** */Comments*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments'`

## <a name="tags"></a>Tags

#### Methods:

* [list](#tagslist)


### <a name="tagslist"></a>Tags::list()

```php
Tags->list(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`

## <a name="taskcategories"></a>TaskCategories

#### Methods:

* [add](#taskcategoriesadd)
* [delete](#taskcategoriesdelete)
* [get](#taskcategoriesget)
* [list](#taskcategorieslist)
* [update](#taskcategoriesupdate)


### <a name="taskcategoriesadd"></a>TaskCategories::add()

```php
TaskCategories->add(task_category);
```

* **Method:** `POST`

* **Endpoint:** */Comments*

* **Parameters:**

  * `task_category` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments'`


### <a name="taskcategoriesdelete"></a>TaskCategories::delete()

```php
TaskCategories->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{id}'`


### <a name="taskcategoriesget"></a>TaskCategories::get()

```php
TaskCategories->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`


### <a name="taskcategorieslist"></a>TaskCategories::list()

```php
TaskCategories->list();
```

* **Method:** `GET`

* **Endpoint:** */Comments*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments'`


### <a name="taskcategoriesupdate"></a>TaskCategories::update()

```php
TaskCategories->update(task_category);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `task_category` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`

## <a name="tasks"></a>Tasks

#### Methods:

* [add](#tasksadd)
* [add_comment](#tasksaddcomment)
* [delete](#tasksdelete)
* [get](#tasksget)
* [get_comments](#tasksgetcomments)
* [list](#taskslist)
* [update](#tasksupdate)


### <a name="tasksadd"></a>Tasks::add()

```php
Tasks->add(task);
```

* **Method:** `POST`

* **Endpoint:** */Comments*

* **Parameters:**

  * `task` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments'`


### <a name="tasksaddcomment"></a>Tasks::add_comment()

```php
Tasks->add_comment(c_id, task_comment);
```

* **Method:** `POST`

* **Endpoint:** */Comments/{c_id}/Comments*

* **Parameters:**

  * `c_id` **required**
  * `task_comment` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments/{c_id}/Comments'`


### <a name="tasksdelete"></a>Tasks::delete()

```php
Tasks->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{id}'`


### <a name="tasksget"></a>Tasks::get()

```php
Tasks->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`


### <a name="tasksgetcomments"></a>Tasks::get_comments()

```php
Tasks->get_comments(c_id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{c_id}/Comments*

* **Parameters:**

  * `c_id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{c_id}/Comments'`


### <a name="taskslist"></a>Tasks::list()

```php
Tasks->list([id]);
```

* **Method:** `GET`

* **Endpoint:** */Comments?ids={id:}*

* **Parameters:**

  * `[id]` *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments?ids={id:}'`


### <a name="tasksupdate"></a>Tasks::update()

```php
Tasks->update(task);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `task` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`

## <a name="teammembers"></a>TeamMembers

#### Methods:

* [add](#teammembersadd)
* [delete](#teammembersdelete)
* [get](#teammembersget)
* [list](#teammemberslist)
* [update](#teammembersupdate)


### <a name="teammembersadd"></a>TeamMembers::add()

```php
TeamMembers->add(team_member);
```

* **Method:** `POST`

* **Endpoint:** */Comments*

* **Parameters:**

  * `team_member` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments'`


### <a name="teammembersdelete"></a>TeamMembers::delete()

```php
TeamMembers->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{id}'`


### <a name="teammembersget"></a>TeamMembers::get()

```php
TeamMembers->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`


### <a name="teammemberslist"></a>TeamMembers::list()

```php
TeamMembers->list([teamid]);
```

* **Method:** `GET`

* **Endpoint:** */Comments?teamid={teamid:}*

* **Parameters:**

  * `[teamid]` *optional*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments?teamid={teamid:}'`


### <a name="teammembersupdate"></a>TeamMembers::update()

```php
TeamMembers->update(team_member);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `team_member` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`

## <a name="teams"></a>Teams

#### Methods:

* [add](#teamsadd)
* [delete](#teamsdelete)
* [get](#teamsget)
* [list](#teamslist)
* [update](#teamsupdate)


### <a name="teamsadd"></a>Teams::add()

```php
Teams->add(team);
```

* **Method:** `POST`

* **Endpoint:** */Comments*

* **Parameters:**

  * `team` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'POST' '/Comments'`


### <a name="teamsdelete"></a>Teams::delete()

```php
Teams->delete(id);
```

* **Method:** `DELETE`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'DELETE' '/Comments/{id}'`


### <a name="teamsget"></a>Teams::get()

```php
Teams->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`


### <a name="teamslist"></a>Teams::list()

```php
Teams->list();
```

* **Method:** `GET`

* **Endpoint:** */Comments*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments'`


### <a name="teamsupdate"></a>Teams::update()

```php
Teams->update(team);
```

* **Method:** `PUT`

* **Endpoint:** */Comments*

* **Parameters:**

  * `team` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -d '{data}' -X 'PUT' '/Comments'`

## <a name="users"></a>Users

#### Methods:

* [get](#usersget)
* [list](#userslist)


### <a name="usersget"></a>Users::get()

```php
Users->get(id);
```

* **Method:** `GET`

* **Endpoint:** */Comments/{id}*

* **Parameters:**

  * `id` **required**

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments/{id}'`


### <a name="userslist"></a>Users::list()

```php
Users->list();
```

* **Method:** `GET`

* **Endpoint:** */Comments*

* **Curl:**

  `curl -u 'username:password' -H 'application/json' -X 'GET' '/Comments'`

