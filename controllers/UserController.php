<?php
namespace humhub\modules\api\controllers;

use Yii;
use humhub\modules\api\controllers\BaseController;
use humhub\modules\User\models\User;
use yii\filters\auth\QueryParamAuth;
use humhub\modules\user\models\forms\AccountLogin;

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

    public function actionLogin($username, $password) {
        $auth = new AccountLogin();
        $auth->username = $username;
        $auth->password = $password;
        try {
            if ($auth->login()) {
                return $auth->getUser();
            } else {
                return false;
            }
        } catch(Exception $e) {
            return false;
        }
    }
}