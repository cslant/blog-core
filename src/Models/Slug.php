<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
use CSlant\Blog\Core\Models\Base\BaseSlug;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Slug
 *
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $key
 * @property int $reference_id
 * @property string $reference_type
 * @property string $prefix
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @method static Builder|Slug newModelQuery()
 * @method static Builder|Slug newQuery()
 * @method static Builder|Slug query()
 * @method static Builder|Slug first()
 * @method static Builder|Slug find($id)
 * @method static Builder|Slug with($relations)
 * @method static Builder|Slug whereId($value)
 * @method static Builder|Slug whereIn($column, $values)
 * @method static Builder|Slug where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Slug findOrFail($id)
 * @method static Slug create($data)
 *
 * @mixin BaseSlug
 */
#[AllowDynamicProperties]
class Slug extends BaseSlug
{
}
