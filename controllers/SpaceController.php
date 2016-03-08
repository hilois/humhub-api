<?php
namespace humhub\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;
use humhub\modules\space\models\Space;
use yii\filters\auth\QueryParamAuth;

class SpaceController extends ActiveController
{
    public $modelClass = 'humhub\modules\space\models\Space';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className(),
        ];
        $behaviors['acl'] = [
            'class' => \humhub\components\behaviors\AccessControl::className(),
            'adminOnly' => true
        ];
        return $behaviors;
    }
}