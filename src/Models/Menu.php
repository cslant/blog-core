<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use CSlant\Blog\Core\Enums\StatusEnum;
use CSlant\Blog\Core\Models\Base\BaseMenu;
use Illuminate\Database\Eloquent\Builder;

/**
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property StatusEnum $status
 * @property MenuLocation[] $locations
 * @property MenuNode[] $menuNodes
 *
 * @method static Builder|Menu find($id, $columns = ['*'])
 * @method static Builder|Menu first($columns = ['*'])
 * @method static Builder|Menu newModelQuery()
 * @method static Builder|Menu newQuery()
 * @method static Builder|Menu query()
 * @method static Builder|Menu where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Builder|Menu whereId($value)
 * @method static Builder|Menu whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static Builder|Menu with($relations)
 * @method static Builder|Menu whenLoaded($relation, $callback = null)
 */
#[AllowDynamicProperties]
class Menu extends BaseMenu
{
}
