<?php
namespace humhub\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;
use humhub\modules\User\models\User;
use yii\filters\auth\QueryParamAuth;

class UserController extends ActiveController
{
    public $modelClass = 'humhub\modules\User\models\User';

    public function actionSearch($search)
    {
        $request = Yii::$app->request;
        if (!$request->isGet) {
            return;
        }
        $query = User::find();
        
        if ($search) {
             $query->where(['like', 'username', $search]);
        }

        return $query->all();
    }

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