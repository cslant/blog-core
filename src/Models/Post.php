<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
use CSlant\Blog\Core\Models\Base\BasePost;
use CSlant\LaravelLike\HasLike;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Post
 *
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property string $status
 * @property int $author_id
 * @property string $author_type
 * @property int $is_featured
 * @property int $views
 * @property string $format_type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Slug $slug
 * @property string $url
 * @property Tag[] $tags
 * @property Category[] $categories
 * @property string $image
 * @property string $author
 *
 * @method static Builder|Post newModelQuery()
 * @method static Builder|Post newQuery()
 * @method static Builder|Post query()
 * @method static Builder|Post first()
 * @method static Builder|Post find($id)
 * @method static Builder|Post with($relations)
 * @method static Builder|Post whereId($value)
 * @method static Builder|Post whereIn($column, $values)
 * @method static Builder|Post where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Post findOrFail($id)
 * @method static Post create($data)
 *
 * @mixin BasePost
 */
#[AllowDynamicProperties]
class Post extends BasePost
{
    use HasLike;

    public function slug(): HasOne
    {
        return $this->hasOne(Slug::class, 'reference_id', 'id')
            ->where('reference_type', $this->getBaseModel());
    }
}
