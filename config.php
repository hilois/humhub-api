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
      	'user/search/<search:.+>' => 'api/user/search'
    ],
];
?>
