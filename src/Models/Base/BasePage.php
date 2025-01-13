<?php

namespace CSlant\Blog\Core\Models\Base;

use Botble\Page\Models\Page as BotblePage;

class BasePage extends BotblePage
{
    public static function getBaseModel(): string
    {
        return 'Botble\Page\Models\Page';
    }
}
