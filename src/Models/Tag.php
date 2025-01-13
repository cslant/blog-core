<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
use CSlant\Blog\Core\Models\Base\BaseTag;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Tag
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
 * @method static Builder|Tag newModelQuery()
 * @method static Builder|Tag newQuery()
 * @method static Builder|Tag query()
 * @method static Builder|Tag first()
 * @method static Builder|Tag find($id)
 * @method static Builder|Tag with($relations)
 * @method static Builder|Tag whereId($value)
 * @method static Builder|Tag whereIn($column, $values)
 * @method static Builder|Tag where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Tag findOrFail($id)
 * @method static Tag create($data)
 *
 * @mixin BaseTag
 */
#[AllowDynamicProperties]
class Tag extends BaseTag
{
}
