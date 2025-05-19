<?php

namespace CSlant\Blog\Core\Models\Base;

use Botble\Menu\Models\MenuNode as BotbleMenuNode;

class BaseMenuNode extends BotbleMenuNode
{
    public static function getBaseModel(): string
    {
        return 'Botble\Menu\Models\MenuNode';
    }
}
