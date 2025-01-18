<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use CSlant\Blog\Core\Models\Base\BasePage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Page
 *
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property string $status
 * @property string $template
 * @property string $image
 * @property int $user_id
 *
 * @method static Builder|Page newModelQuery()
 * @method static Builder|Page newQuery()
 * @method static Builder|Page query()
 * @method static Builder|Page first()
 * @method static Builder|Page find($id)
 * @method static Builder|Page with($relations)
 * @method static Builder|Page whereId($value)
 * @method static Builder|Page whereIn($column, $values)
 * @method static Builder|Page where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Page findOrFail($id)
 * @method static Page create($data)
 *
 * @mixin BasePage
 */
#[AllowDynamicProperties]
class Page extends BasePage
{
    /**
     * @return HasOne<Slug>
     */
    public function slug(): HasOne
    {
        return $this->hasOne(Slug::class, 'reference_id', 'id')
            ->where('reference_type', $this->getBaseModel());
    }
}
