<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use CSlant\Blog\Core\Models\Base\BaseUser;

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
 * @property object $permissions
 * @property string $avatar_url Property for avatar image url
 * @property null|Role $roles
 */
#[AllowDynamicProperties]
class User extends BaseUser
{
}
