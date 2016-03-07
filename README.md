# IN DEVELOPMENT - NOT READY FOR USE, WILL CHANGE AND BREAK FREQUENTLY

# [HumHub](https://github.com/humhub/humhub) Api

This module is for HumHub Version 0.20 (Yii 2) and greater and cannot be used with HumHub Version 0.1x (Yii 1.1)

## Description

All api calls require an access token (user guid).  Access is limited to users with Super Admin privileges.

Sample Call: http://localhost/user/search/:text?access-token=:guid

This module implements a REST api for humhub, returning the following endpoints:

### User

1. /user - returns a list of users
2. /user/:id - returns a users matching the user id 
3. /user/search/:text - returns a list of users with username matching the search criteria


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
