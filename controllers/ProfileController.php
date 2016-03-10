<?php
namespace humhub\modules\api\controllers;

use Yii;
use humhub\modules\api\controllers\BaseController;
use humhub\modules\User\models\Profile;
use yii\filters\auth\QueryParamAuth;

class ProfileController extends BaseController
{
    public $modelClass = 'humhub\modules\User\models\Profile';

}