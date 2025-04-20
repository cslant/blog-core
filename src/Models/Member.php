<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Botble\Member\Notifications\ResetPasswordNotification;
use CSlant\Blog\Core\Models\Base\BaseMember;
use CSlant\Blog\UserCustom\Notifications\ConfirmEmailNotification;

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
    public function sendPasswordResetNotification($token): void
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function sendEmailVerificationNotification(): void
    {
        $this->notify(new ConfirmEmailNotification);
    }
}
