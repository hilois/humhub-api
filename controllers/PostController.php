<?php
namespace humhub\modules\api\controllers;

use Yii;
use humhub\modules\api\controllers\BaseController;
use humhub\modules\post\models\Post;
use yii\filters\auth\QueryParamAuth;

class PostController extends BaseController
{
    public $modelClass = 'humhub\modules\post\models\Post';

}