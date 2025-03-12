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
 * @property string $meta_key
 * @property string $meta_value
 * @property int $reference_id
 * @property string $reference_type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @mixin BaseMetaBox
 */
#[AllowDynamicProperties]
class MetaBox extends BaseMetaBox
{
    protected $fillable = [
        'meta_key',
        'meta_value',
        'reference_id',
        'reference_type',
    ];
}
