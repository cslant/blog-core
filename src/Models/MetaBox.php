<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
use CSlant\Blog\Core\Models\Base\BaseMetaBox;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class MetaBox
 *
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $status
 * @property int $author_id
 * @property string $author_type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $slug
 *
 * @method static Builder|MetaBox newModelQuery()
 * @method static Builder|MetaBox newQuery()
 * @method static Builder|MetaBox query()
 * @method static Builder|MetaBox first()
 * @method static Builder|MetaBox find($id)
 * @method static Builder|MetaBox with($relations)
 * @method static Builder|MetaBox whereId($value)
 * @method static Builder|MetaBox whereIn($column, $values)
 * @method static Builder|MetaBox where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static MetaBox findOrFail($id)
 * @method static MetaBox create($data)
 *
 * @mixin BaseMetaBox
 */
#[AllowDynamicProperties]
class MetaBox extends BaseMetaBox
{
    public static function getBaseModel(): string
    {
        return 'Botble\Base\Models\MetaBox';
    }
}
