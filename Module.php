<?php
namespace humhub\modules\api;
use Yii;

class Module extends \humhub\modules\content\components\ContentContainerModule
{
	public function beforeAction($action)
    {
        Yii::$app->request->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
}
