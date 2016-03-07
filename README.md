# IN DEVELOPMENT - NOT READY FOR USE, WILL CHANGE AND BREAK FREQUENTLY

# [HumHub](https://github.com/humhub/humhub) Api

This module is for HumHub Version 0.20 (Yii 2) and greater and cannot be used with HumHub Version 0.1x (Yii 1.1)

## Description

This module implements a REST api for humhub, returning the following endpoints:

1. /api/api/users - returns a list of users
1. /api/api/users?id= - returns a list of users matching the user id (note: will only return one, but still treated as a list)
1. /api/api/users?search= - returns a list of users with username matching the search criteria


## Installation
1. Download the module and upload it to your modules directory >yourdomain.com>protected>modules
2. Rename module directory ```api``` (May not be required!)
3. Enable module from >Admin>Modules

## TODO
1. Define desired endpoints/actions
2. Implement API key system for authentication.


## Authors/Module Website

__Module website:__ <https://github.com/petersmithca/humhub-api>  

__Author website:__ [https://github.com/petersmithca](https://github.com/petersmithca)    
__Author:__ petersmithca    
