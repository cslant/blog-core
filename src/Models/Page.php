<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use CSlant\Blog\Core\Models\Base\BasePage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Page
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasOne<\CSlant\Blog\Core\Models\Slug, Page>
 * /
 * @mixin BasePage
 *@package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property string $status
 * @property string $template
 * @property string $image
 * @property int $user_id
 *
 */
#[AllowDynamicProperties]
class Page extends BasePage
{
    public function slug(): HasOne
    {
        return $this->hasOne(Slug::class, 'reference_id', 'id')
            ->where('reference_type', $this->getBaseModel());
    }
}
