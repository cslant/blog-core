<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use CSlant\Blog\Core\Models\Base\BaseCategory;

/**
 * Class Category
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
 * @property string $created_at
 * @property string $updated_at
 * @property string $slug
 * @property string $url
 * @mixin BaseCategory
 */
#[AllowDynamicProperties]
class Category extends BaseCategory
{
}
