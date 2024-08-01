<?php

namespace CSlant\Blog\Core\Models\Traits;

use CSlant\Blog\ElasticScout\Modules\Traits\SearchableAs;

/**
 * Trait UserTrait
 * @package CSlant\Blog\Core\Models\Traits
 * @mixin SearchableAs
 *
 * @method string userSearchableAs() see \CSlant\Blog\ElasticScout\Modules\Traits\SearchableAs::userSearchableAs()
 */
trait UserTrait
{
    use SearchableAs;

    public function searchableAs(): string
    {
        return $this->userSearchableAs();
    }
}
