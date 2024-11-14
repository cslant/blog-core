<?php

namespace CSlant\Blog\Core\Models\Traits;

use CSlant\Blog\Core\Models\User;
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

    /**
     * Elastisearch config
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return $this->userSearchableAs();
    }

    /**
     * Elastisearch config
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        Log::info("UserTrait::toSearchableArray(), Es User: " . $this->getKey());

        /** @var User $this */
        return [
            'id' => $this->id,
            'email' => $this->email,
            'email_lowercase' => strtolower($this->email),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'first_name' => $this->first_name ?? null,
            'last_name' => $this->last_name ?? null,
            'username' => $this->username,
            'permissions' => $this->permissions ?? null,
            'avatar' => $this->avatar?->name ?? null,
            'avatar_url' => $this->avatar?->url ?? null,
        ];
    }

    /**
     * Elastisearch config
     * Determine if the model should be searchable.
     *
     * @return bool
     */
    public function shouldBeSearchable(): bool
    {
        return !$this->wasChanged();
    }
}
