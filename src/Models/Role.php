<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
use CSlant\Blog\Core\Models\Base\BaseRole;

/**
 * Class Role
 *
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property object $permissions
 * @property string $status
 * @property int $is_default
 * @property int $created_by
 * @property int $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
#[AllowDynamicProperties]
class Role extends BaseRole
{
}
