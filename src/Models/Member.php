<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use CSlant\Blog\Core\Models\Base\BaseMember;
use CSlant\LaravelLike\UserHasInteraction;

/**
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $dob
 * @property string $gender
 * @property string $description
 *
 * @mixin BaseMember
 */
#[AllowDynamicProperties]
class Member extends BaseMember
{
    use UserHasInteraction;
}
