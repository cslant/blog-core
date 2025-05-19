<?php

namespace CSlant\Blog\Core\Models\Base;

use Botble\Menu\Models\MenuLocation as BotbleMenuLocation;

class BaseMenuLocation extends BotbleMenuLocation
{
    public static function getBaseModel(): string
    {
        return 'Botble\Menu\Models\MenuLocation';
    }
}
