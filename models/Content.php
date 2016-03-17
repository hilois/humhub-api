<?php

namespace humhub\modules\api\models;

use Yii;
use humhub\modules\api\models\Post;

/**
 * User model extends humhub User model to implement relationships.
  *
 * @author petersmithca
 */
class Content extends \humhub\modules\content\models\Content
{
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['id' => 'object_id']);
    }
}
