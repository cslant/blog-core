<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
use CSlant\Blog\Core\Models\Base\BaseSlug;

/**
 * Class Slug
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $key
 * @property int $reference_id
 * @property string $reference_type
 * @property string $prefix
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @mixin BaseSlug
 */
#[AllowDynamicProperties]
class Slug extends BaseSlug
{
}
