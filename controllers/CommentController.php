<?php
namespace humhub\modules\api\controllers;

use Yii;
use humhub\modules\api\controllers\BaseController;
use humhub\modules\Comment\models\Comment;
use yii\filters\auth\QueryParamAuth;

class CommentController extends BaseController
{
    public $modelClass = 'humhub\modules\Comment\models\Comment';

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

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['update'], $actions['create']);
        return $actions;
    }

    public function actionUpdate($id){
        $comment = Comment::find()->where(['id' => $id])->one();
        $message = Yii::$app->request->getBodyParam('message');
        $comment->message = $message;
        $comment->save();
        return \Yii::createObject([
	        'class' => 'yii\web\Response',
	        'format' => \yii\web\Response::FORMAT_JSON,
	        'statusCode' => 200,
	        'data' => $comment,
	    ]);
    }

    public function actionCreate(){
        $comment = new Comment();
        $message = Yii::$app->request->getBodyParam('message');
        $post_id = Yii::$app->request->getBodyParam('post_id');
        $user_id = Yii::$app->request->getBodyParam('user_id');
        $comment->message = $message;
        $comment->object_id = $post_id;
        $comment->created_by = $user_id;
        $comment->object_model = 'humhub\modules\post\models\Post';
        $comment->save();
        return \Yii::createObject([
	        'class' => 'yii\web\Response',
	        'format' => \yii\web\Response::FORMAT_JSON,
	        'statusCode' => 200,
	        'data' => $comment,
	    ]);
    }
}