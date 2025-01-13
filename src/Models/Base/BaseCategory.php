<?php

namespace CSlant\Blog\Core\Models\Base;

use Botble\Blog\Models\Category as BotbleCategory;

class BaseCategory extends BotbleCategory
{
    public static function getBaseModel(): string
    {
        return 'Botble\Page\Models\Category';
    }
}
