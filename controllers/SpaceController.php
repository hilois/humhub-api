<?php
namespace humhub\modules\api\controllers;

use Yii;
use humhub\modules\api\controllers\BaseController;
use humhub\modules\space\models\Space;
use yii\filters\auth\QueryParamAuth;

class SpaceController extends BaseController
{
    public $modelClass = 'humhub\modules\space\models\Space';
}