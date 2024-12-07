<?php

namespace CSlant\Blog\Core\Models;

use CSlant\Blog\Core\Models\Base\BaseTag;

/**
 * Class Tag
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $status
 * @property int $author_id
 * @property string $author_type
 * @property string $created_at
 * @property string $updated_at
 * @property string $slug
 * @mixin BaseTag
 */
class Tag extends BaseTag
{
}
