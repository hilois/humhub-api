<?php

namespace humhub\modules\api\models;

use Yii;
use humhub\modules\api\models\User;
use humhub\modules\api\models\Comment;

/**
 * Post model extends humhub Post model to implement relationships.
  *
 * @author petersmithca
 */
class Post extends \humhub\modules\post\models\Post
{
    /**
     * Identifies relationship between Post and User
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * Identifies relationship between Post and Comment
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['object_id' => 'id'])->where('{{comment}}.object_model = :post_type', [':post_type' => 'humhub\modules\post\models\Post']);
    }
}
