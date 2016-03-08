<?php
namespace humhub\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;
use humhub\modules\post\models\Post;
use yii\filters\auth\QueryParamAuth;

class PostController extends ActiveController
{
    public $modelClass = 'humhub\modules\post\models\Post';

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