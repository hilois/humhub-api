<?php
namespace humhub\modules\api\controllers;

use humhub\modules\api\controllers\BaseController;

class ProfileController extends BaseController
{
    public $modelClass = 'humhub\modules\api\models\Profile';

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['delete'], $actions['update'], $actions['create']);
        return $actions;
    }
}