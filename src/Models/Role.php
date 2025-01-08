<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
use CSlant\Blog\Core\Models\Base\BaseRole;
use Illuminate\Database\Eloquent\Builder;

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
 *
 * @method static Builder|Role newModelQuery()
 * @method static Builder|Role newQuery()
 * @method static Builder|Role query()
 * @method static Builder|Role first()
 * @method static Builder|Role find()
 * @method static Builder|Role whereCreatedAt($value)
 */
#[AllowDynamicProperties]
class Role extends BaseRole
{
}
