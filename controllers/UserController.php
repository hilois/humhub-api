<?php
namespace humhub\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;
use humhub\modules\User\models\User;

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
}