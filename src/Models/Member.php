<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use CSlant\Blog\Core\Models\Base\BaseMember;
use Botble\Member\Notifications\ResetPasswordNotification;
use CSlant\Blog\UserCustom\Notifications\ConfirmEmailNotification;
use Illuminate\Database\Eloquent\Builder;

/**
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 *
 * @method static Builder|Member newQuery()
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
