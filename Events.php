<?php
namespace humhub\modules\api;

use Yii;
use yii\helpers\Url;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => 'Humhub Api',
            'url' => Url::toRoute('/api/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-weixin"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'api' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }
}