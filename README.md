# IN DEVELOPMENT - NOT READY FOR USE, WILL CHANGE AND BREAK FREQUENTLY

# [HumHub](https://github.com/humhub/humhub) Api

This module is for HumHub Version 0.20 (Yii 2) and greater and cannot be used with HumHub Version 0.1x (Yii 1.1)

## Description

This module implements a RESTful API for Humhub installations.  Returning JSON or XML, developers can make use of
the end points to create applications, implement combined logins, create AJAX web applications, etc.

Only core module access is supported, not optional plugins.

All api calls require an access token (user guid).  Access is limited to users with Super Admin privileges.

Sample Call: http://localhost/user/search/:text?access-token=:guid

Sample Output:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<response><Comment><id>1</id><message>Nike – Just buy it. ;Wink;</message><object_model>humhub\modules\post\models\Post</object_model><object_id>2</object_id><space_id></space_id><created_at>2016-02-16 16:44:00</created_at><created_by>2</created_by><updated_at>2016-02-16 16:44:00</updated_at><updated_by>2</updated_by></Comment><Comment><id>2</id><message>Calvin Klein – Between love and madness lies obsession.</message><object_model>humhub\modules\post\models\Post</object_model><object_id>2</object_id><space_id></space_id><created_at>2016-02-16 16:44:00</created_at><created_by>3</created_by><updated_at>2016-02-16 16:44:00</updated_at><updated_by>3</updated_by></Comment></response>

```


This module implements a REST api for humhub, returning the following endpoints:

### User

1. /user - returns a list of users
2. /user/:id - returns a user matching the user id 
3. /user/search/:text - returns a list of users with username matching the search criteria

### Profile

1. /profile - returns a list of user profiles
2. /profile/:id - returns a profile for the user id 

### Space

1. /space - returns a list of spaces
2. /space/:id - returns a space matching the space id 

### Post

1. /post - returns a list of posts
2. /post/:id - returns a post matching the post id 

### Comment

1. /comment - returns a list of comments
2. /comment/:id - returns a comment matching the comment id 
3. /comment/post/:id - returns a list of comments for a particular post id

## Installation
1. Download the module and upload it to your modules directory >yourdomain.com>protected>modules
2. Rename module directory ```api``` (May not be required!)
3. Enable module from >Admin>Modules

## Requirements
This Module requires pretty urls to be enabled - see: https://www.humhub.org/docs/guide-admin-installation.html#4-fine-tuning

## TODO
1. Define desired endpoints/actions


## Authors/Module Website

__Module website:__ <https://github.com/petersmithca/humhub-api>  

__Author website:__ [https://github.com/petersmithca](https://github.com/petersmithca)    
__Author:__ petersmithca    
