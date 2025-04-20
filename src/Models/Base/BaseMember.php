<?php

namespace CSlant\Blog\Core\Models\Base;

use Botble\Member\Models\Member as BotbleCategory;

class BaseMember extends BotbleCategory
{
    public static function getBaseModel(): string
    {
        return 'Botble\Blog\Models\Category';
    }
}
