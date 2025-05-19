<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use CSlant\Blog\Core\Models\Base\BaseMenuNode;
use Illuminate\Database\Eloquent\Builder;

/**
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property int $menu_id
 * @property int $parent_id
 * @property int $reference_id
 * @property string $reference_type
 * @property string $url
 * @property string $icon_font
 * @property string $title
 * @property string $css_class
 * @property string $target
 * @property bool $has_child
 * @property int $position
 * @property MenuNode $parent
 * @property MenuNode[] $child
 *
 * @method static Builder|MenuLocation find($id, $columns = ['*'])
 * @method static Builder|MenuLocation first($columns = ['*'])
 * @method static Builder|MenuLocation newModelQuery()
 * @method static Builder|MenuLocation newQuery()
 * @method static Builder|MenuLocation query()
 * @method static Builder|MenuLocation where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Builder|MenuLocation whereId($value)
 * @method static Builder|MenuLocation whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static Builder|MenuLocation with($relations)
 * @method static Builder|MenuLocation whenLoaded($relation, $callback = null)
 */
#[AllowDynamicProperties]
class MenuNode extends BaseMenuNode
{
}
