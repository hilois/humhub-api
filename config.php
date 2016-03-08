<?php
namespace humhub\modules\api;

return [
    'id' => 'api',
    'class' => 'humhub\modules\api\Module',
    'namespace' => 'humhub\modules\api',
    'urlManagerRules' => [
        ['class' => 'humhub\modules\space\components\UrlRule'],
      	'user' => 'api/user',
      	'user/<id:\d+>' => 'api/user/view',
      	'user/search/<search:.+>' => 'api/user/search',
      	'profile' => 'api/profile',
      	'profile/<id:\d+>' => 'api/profile/view',
      	'space' => 'api/space',
      	'post' => 'api/post',
      	'post/<id:\d+>' => 'api/post/view',
      	'comment' => 'api/comment',
      	'comment/<id:\d+>' => 'api/comment/view',
      	'comment/post/<id:\d+>' => 'api/comment/post',
    ],
];
?>
