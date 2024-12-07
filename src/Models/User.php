<?php

namespace CSlant\Blog\Core\Models;

use CSlant\Blog\Core\Models\Base\BaseUser;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class User
 *
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property array $permissions
 * @property string $avatar_url Property for avatar image url
 * @property Role $roles
 *
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User first()
 * @method static Builder|User find()
 * @method static Builder|User whereCreatedAt($value)
 *
 */
class User extends BaseUser
{
}
