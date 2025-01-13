<?php

namespace CSlant\Blog\Core\Facades\Base;

use Botble\Base\Facades\MetaBox as BaseMetaBox;

/**
 * @method static void addMetaBox(string $id, string $title, \Closure|callable|array|string $callback, string|null $reference = null, string $context = 'advanced', string $priority = 'default', array|null $callbackArgs = null)
 * @method static void doMetaBoxes(string $context, \Illuminate\Database\Eloquent\Model|array|string|null $object = null)
 * @method static void removeMetaBox(string $id, string|null $reference, string $context)
 * @method static void saveMetaBoxData(\Illuminate\Database\Eloquent\Model $object, string $key, $value, $options = null)
 * @method static array|string|null getMetaData(\Illuminate\Database\Eloquent\Model $object, string $key, bool $single = false, array $select = ['meta_value'])
 * @method static \Illuminate\Database\Eloquent\Model|null getMeta(\Illuminate\Database\Eloquent\Model $object, string $key, array $select = ['meta_value'])
 * @method static bool deleteMetaData(\Illuminate\Database\Eloquent\Model $object, string $key)
 * @method static array getMetaBoxes()
 *
 * @see \Botble\Base\Supports\MetaBox
 */
class MetaBox extends BaseMetaBox
{
}
