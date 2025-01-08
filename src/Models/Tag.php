<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
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
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $slug
 * @mixin BaseTag
 */
#[AllowDynamicProperties]
class Tag extends BaseTag
{
}
