<?php
namespace humhub\modules\api\controllers;

use Yii;
use humhub\modules\api\controllers\BaseController;
use humhub\modules\api\models\Post;
use yii\filters\auth\QueryParamAuth;

class PostController extends BaseController
{
    public $modelClass = 'humhub\modules\api\models\Post';

    /**
     * @inheritdoc
     */
    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index'], $actions['view']);
        return $actions;
    }

    /**
     * Overrides Index functionality to sort posts and limit result set.  Returns `eager` results
     * including user and comments if eager parameter is set to true.
     * @param integer $id
     * @return mixed
     */
    public function actionIndex($eager = false){
        $posts = Post::find()
            ->innerJoinWith('user', $eager)
            ->innerJoinWith('comments', $eager)
            ->orderBy('updated_at DESC')
            ->limit(self::MAX_ROWS)
            ->asArray()
            ->all();
        return $posts;
    }

    /**
     * Overrides View functionalityto return `eager` results
     * including user and comments
     * @param integer $id
     * @return mixed
     */
    public function actionView($id){
        $posts = Post::find()
            ->innerJoinWith('user')
            ->innerJoinWith('comments')
            ->where(['{{post}}.id' => $id])
            ->asArray()
            ->one();
        return $posts;
    }

}