<?php
namespace humhub\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;
use humhub\modules\User\models\Profile;
use yii\filters\auth\QueryParamAuth;

class ProfileController extends ActiveController
{
    public $modelClass = 'humhub\modules\User\models\Profile';

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