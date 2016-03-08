<?php
namespace humhub\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;
use humhub\modules\Comment\models\Comment;
use yii\filters\auth\QueryParamAuth;

class CommentController extends ActiveController
{
    public $modelClass = 'humhub\modules\Comment\models\Comment';

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

    public function actionPost($id)
    {
        $request = Yii::$app->request;
        if (!$request->isGet) {
            return;
        }
        $query = Comment::find();
        
        if ($id) {
             $query->where(['object_id' => $id]);
        }

        return $query->all();
    }
}