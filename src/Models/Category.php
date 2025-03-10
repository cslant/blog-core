<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
use CSlant\Blog\Core\Models\Base\BaseCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Category
 *
 * @package CSlant\Blog\Core\Models
 * @template TModel of Category
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
 * @method static Builder<Category> newModelQuery()
 * @method static Builder<Category> newQuery()
 * @method static Builder<Category> query()
 * @method static Builder<Category> first()
 * @method static Builder<Category> find($id)
 * @method static Builder<Category> with($relations)
 * @method static Builder<Category> whereId($value)
 * @method static Builder<Category> whereIn($column, $values)
 * @method static Builder<Category> where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Category findOrFail($id)
 * @method static Category create($data)
 *
 * @mixin BaseCategory
 */
#[AllowDynamicProperties]
class Category extends BaseCategory
{
    /**
     * @return HasOne<Slug, Category>
     */
    public function slug(): HasOne
    {
        return $this->hasOne(Slug::class, 'reference_id', 'id')
            ->where('reference_type', $this->getBaseModel());
    }
}
