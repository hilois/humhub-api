<?php
namespace humhub\modules\api\controllers;

use Yii;
use humhub\modules\api\controllers\BaseController;
use humhub\modules\notification\models\Notification;

class NotificationController extends BaseController
{
    public $modelClass = 'humhub\modules\notification\models\Notification';

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['delete'], $actions['update'], $actions['create'], $actions['view'], $actions['index']);
        return $actions;
    }

    /**
     * Overrides Index functionality to return only unseeen notifications
     * @param integer $id
     * @return mixed
     */
    public function actionIndex(){
        $comment = Notification::find()->where(['seen' => 0])->limit(self::MAX_ROWS)->all();
        return $comment;
    }
}