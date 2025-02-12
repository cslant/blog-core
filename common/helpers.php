<?php

use Illuminate\Database\Eloquent\Model;

if (!function_exists('get_class_name_by_slug')) {
    /**
     * Get class name by slug.
     *
     * @param  string  $slug
     *
     * @return string
     */
    function get_class_name_by_slug(string $slug): string
    {
        $models = [
            'post' => \CSlant\Blog\Core\Models\Post::class,
            'page' => \CSlant\Blog\Core\Models\Page::class,
            'category' => \CSlant\Blog\Core\Models\Category::class,
            'tag' => \CSlant\Blog\Core\Models\Tag::class,
        ];

        if (array_key_exists($slug, $models)) {
            /** @var Model $models */
            return $models[$slug]::getBaseModel();
        }

        return '';
    }

}
