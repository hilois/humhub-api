<?php
namespace humhub\modules\api\controllers;

use Yii;
use humhub\modules\api\controllers\BaseController;
use humhub\modules\User\models\User;
use yii\filters\auth\QueryParamAuth;

class UserController extends BaseController
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