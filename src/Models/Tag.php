<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
use CSlant\Blog\Core\Models\Base\BaseTag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Tag
 *
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $status
 * @property int $author_id
 * @property string $author_type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Slug $slug
 * @property int $posts_count
 *
 * @method static Builder|Tag newModelQuery()
 * @method static Builder|Tag newQuery()
 * @method static Builder|Tag query()
 * @method static Builder|Tag first()
 * @method static Builder|Tag find($id)
 * @method static Builder|Tag with($relations)
 * @method static Builder|Tag whereId($value)
 * @method static Builder|Tag whereIn($column, $values)
 * @method static Builder|Tag where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Tag findOrFail($id)
 * @method static Tag create($data)
 *
 * @mixin BaseTag
 */
#[AllowDynamicProperties]
class Tag extends BaseTag
{
    public function slug(): HasOne
    {
        return $this->hasOne(Slug::class, 'reference_id', 'id')
            ->where('reference_type', $this->getBaseModel());
    }

    /**
     * Defining an posts count accessor
     * ->posts_count
     *
     * @return int
     */
    public function getPostsCountAttribute(): int
    {
        return $this->posts()->count();
    }
}
