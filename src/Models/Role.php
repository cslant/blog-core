<?php

namespace CSlant\Blog\Core\Models;

use CSlant\Blog\Core\Models\Base\BaseRole;

/**
 * Class Role
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
 * @property string $created_at
 * @property string $updated_at
 */
class Role extends BaseRole
{
}
