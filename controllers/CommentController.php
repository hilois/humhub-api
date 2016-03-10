<?php
namespace humhub\modules\api\controllers;

use Yii;
use humhub\modules\api\controllers\BaseController;
use humhub\modules\Comment\models\Comment;
use yii\filters\auth\QueryParamAuth;

class CommentController extends BaseController
{
    public $modelClass = 'humhub\modules\Comment\models\Comment';
}