<?php
namespace humhub\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;
use humhub\modules\post\models\Post;
use yii\filters\auth\QueryParamAuth;
use humhub\modules\api\models\ApiUser;
use yii\web\UnauthorizedHttpException;

class BaseController extends ActiveController
{
    public function beforeAction($action) {
        if (!parent::beforeAction($action)) {
            return false;
        }
        $req = Yii::$app->request;
        parse_str($req->queryString);
        if (ApiUser::findIdentityByAccessToken($access_token)) {
            return true;
        } 
       throw new UnauthorizedHttpException('You are requesting with an invalid credential.', 401);
    }
}