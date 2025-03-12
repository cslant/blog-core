<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
use CSlant\Blog\Core\Models\Base\BasePost;
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
 * @property int $view
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
 * @mixin BasePost
 */
#[AllowDynamicProperties]
class Post extends BasePost
{
    public function slug(): HasOne
    {
        return $this->hasOne(Slug::class, 'reference_id', 'id')
            ->where('reference_type', $this->getBaseModel());
    }
}
