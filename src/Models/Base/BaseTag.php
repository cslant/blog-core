<?php

namespace CSlant\Blog\Core\Models\Base;

use Botble\Blog\Models\Tag as BotbleTag;

class BaseTag extends BotbleTag
{
    public static function getBaseModel(): string
    {
        return 'Botble\Blog\Models\Tag';
    }
}
