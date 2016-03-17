<?php

namespace humhub\modules\api\models;

use Yii;
use humhub\modules\api\models\User;

/**
 * User model extends humhub User model to implement relationships.
  *
 * @author petersmithca
 */
class Profile extends \humhub\modules\user\models\Profile
{
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
