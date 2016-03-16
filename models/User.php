<?php

namespace humhub\modules\api\models;

use Yii;
use humhub\modules\api\models\Post;

/**
 * User model extends humhub User model to implement relationships.
  *
 * @author petersmithca
 */
class User extends \humhub\modules\user\models\User
{
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['created_by' => 'id']);
    }
}
