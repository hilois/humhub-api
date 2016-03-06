<?php
namespace humhub\modules\api\controllers;

use Yii;
use yii\helpers\Url;
use humhub\modules\User\models\User;

/*
This module will attempt to use appropriate HTTP actions for endpoints
eg: Adding data will use POST, retreiving will use GET, updating will use PUT
*/

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

    /*
    Returns a list of users.  Responds to GET requestions only
    adding query string id= will return specific user only
    adding query string search= will return all users with a username matching specific text
    */
    public function actionUsers($id = null, $search = null)
    {
        $request = Yii::$app->request;
        if (!$request->isGet) {
            return;
        }
        $query = User::find();
        if ($id) {
            $query->where(['id' => $id]);
        }
        if ($search) {
             $query->where(['like', 'username', $search]);
        }
        $query->asArray(true);
        $results = $query->all();
        return json_encode($results);
    }

}
