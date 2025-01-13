<?php

namespace CSlant\Blog\Core\Models\Base;

use Botble\Base\Models\MetaBox as BotbleMetaBox;

class BaseMetaBox extends BotbleMetaBox
{
    public static function getBaseModel(): string
    {
        return 'Botble\Base\Models\MetaBox';
    }
}
