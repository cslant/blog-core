<?php

namespace CSlant\Blog\Core\Models\Traits;

use Botble\ACL\Models\User;
use CSlant\Blog\ElasticScout\Modules\Traits\SearchableAs;
use Illuminate\Support\Facades\Log;
use Laravel\Scout\Searchable;

/**
 * Trait UserTrait
 * @package CSlant\Blog\Core\Models\Traits
 * @mixin SearchableAs
 *
 * @method string userSearchableAs() see \CSlant\Blog\ElasticScout\Modules\Traits\SearchableAs::userSearchableAs()
 */
trait UserTrait
{
    use Searchable;
    use SearchableAs;

    public function searchableAs(): string
    {
        return $this->userSearchableAs();
    }

    public function toSearchableArray(): array
    {
        Log::info("UserTrait::toSearchableArray(), Es User: " . $this->getKey());

        /**
         * @var User $this
         */
        return [
            'id' => $this->id,
            'email' => $this->email,
            'email_lowercase' => strtolower($this->email),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'username' => $this->username,
            'permissions' => $this->permissions,
            'avatar' => $this->avatar ? $this->avatar->name : null,
            'avatar_url' => $this->avatar ? $this->avatar->url : null,
        ];
    }
}
