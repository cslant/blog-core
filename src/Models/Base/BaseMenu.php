<?php

namespace CSlant\Blog\Core\Models\Base;

use Botble\Menu\Models\Menu as BotbleMenu;

class BaseMenu extends BotbleMenu
{
    public static function getBaseModel(): string
    {
        return 'Botble\Menu\Models\Menu';
    }
}
