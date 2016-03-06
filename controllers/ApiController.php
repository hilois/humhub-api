<?php
namespace humhub\modules\api\controllers;

use Yii;
use yii\helpers\Url;
use humhub\modules\User\models\User;

class ApiController extends \humhub\modules\admin\components\Controller
{

    public function behaviors()
    {
        return [
            'acl' => [
                'class' => \humhub\components\behaviors\AccessControl::className()
            ]
        ];
    }

    public function actionUsers()
    {
        $query = User::find();
        $query->asArray(true);
        $results = $query->all();
        return json_encode($results);
    }

}
