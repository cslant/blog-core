<?php

namespace CSlant\Blog\Core\Models\Base;

use Botble\Blog\Models\Post as BotblePost;

class BasePost extends BotblePost
{
    public static function getBaseModel(): string
    {
        return 'Botble\Blog\Models\Post';
    }
}
