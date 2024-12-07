<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use CSlant\Blog\Core\Models\Base\BasePost;

/**
 * Class Post
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
 * @property string $created_at
 * @property string $updated_at
 * @property string $slug
 * @property string $url
 * @property array $tags
 * @property array $categories
 * @property string $image
 * @property string $author
 * @mixin BasePost
 */
#[AllowDynamicProperties]
class Post extends BasePost
{
}
