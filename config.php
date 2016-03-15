<?php
namespace humhub\modules\api;

return [
    'id' => 'api',
    'class' => 'humhub\modules\api\Module',
    'namespace' => 'humhub\modules\api',
    'controllerNamespace' => 'humhub\modules\api',
    'urlManagerRules' => [
        ['class' => 'humhub\modules\space\components\UrlRule'],
      	'api/user' => 'api/user',
      	'api/user/<id:\d+>' => 'api/user/view',
      	'api/user/search/<search:.+>' => 'api/user/search',
        'api/user/login/<username:.+>/<password:.+>' => 'api/user/login',
      	'api/profile' => 'api/profile',
      	'api/profile/<id:\d+>' => 'api/profile/view',
      	'api/space' => 'api/space',
      	'GET api/post' => 'api/post',
      	'GET api/post/<id:\d+>' => 'api/post/view',
        'DELETE api/post/<id:\d+>' => 'api/post/delete',
      	'GET api/comment' => 'api/comment',
        'POST api/comment' => 'api/comment/create',
      	'GET api/comment/<id:\d+>' => 'api/comment/view',
      	'api/comment/post/<id:\d+>' => 'api/comment/post',
      	'DELETE api/comment/<id:\d+>' => 'api/comment/delete',
        'PUT,PATCH api/comment/<id:\d+>' => 'api/comment/update',
    ],
    'events' => [
      [
          'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
          'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
          'callback' => [
              'humhub\modules\api\Events',
              'onAdminMenuInit'
          ]
      ]
    ]
];
?>
