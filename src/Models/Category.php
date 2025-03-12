<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
use CSlant\Blog\Core\Models\Base\BaseCategory;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Category
 *
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property string $description
 * @property string $status
 * @property int $author_id
 * @property string $author_type
 * @property string $icon
 * @property int $order
 * @property int $is_featured
 * @property int $is_default
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Slug $slug
 * @property string $url
 * @property Category $parent
 * @property Category[] $children
 *
 * @mixin BaseCategory
 */
#[AllowDynamicProperties]
class Category extends BaseCategory
{
    public function slug(): HasOne
    {
        return $this->hasOne(Slug::class, 'reference_id', 'id')
            ->where('reference_type', $this->getBaseModel());
    }
}
