<?php

namespace CSlant\Blog\Core\Models\Base;

use FriendsOfBotble\Comment\Models\Comment;

class BaseComment extends Comment
{
    public static function getBaseModel(): string
    {
        return 'FriendsOfBotble\Comment\Models\Comment';
    }
}
