<?php

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
        if ($slug === 'post') {
            return \CSlant\Blog\Core\Models\Post::getBaseModel();
        } elseif ($slug === 'page') {
            return \CSlant\Blog\Core\Models\Page::getBaseModel();
        } elseif ($slug === 'category') {
            return \CSlant\Blog\Core\Models\Category::getBaseModel();
        } elseif ($slug === 'tag') {
            return \CSlant\Blog\Core\Models\Tag::getBaseModel();
        } else {
            return '';
        }
    }
}
