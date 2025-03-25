<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use Carbon\Carbon;
use CSlant\Blog\Core\Models\Base\BaseUser;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class User
 *
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property object $permissions
 * @property Carbon $created_at
 * @property string $avatar_url Property for avatar image url
 * @property int $posts_count
 * @property null|Role $roles
 * @property Post[] $posts
 *
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User first()
 * @method static Builder|User find($id)
 * @method static Builder|User whereCreatedAt($value)
 *
 */
#[AllowDynamicProperties]
class User extends BaseUser
{
    /**
     * Defining an posts count accessor
     * ->posts_count
     *
     * @return int
     */
    public function getPostsCountAttribute(): int
    {
        return $this->posts()->count();
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'author_id');
    }
}
