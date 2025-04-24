<?php

namespace CSlant\Blog\Core\Models\Base;

use FriendsOfBotble\Comment\Models\Comment as BotbleComment;

class BaseComment extends BotbleComment
{
    public static function getBaseModel(): string
    {
        return 'FriendsOfBotble\Comment\Models\Comment';
    }
}
