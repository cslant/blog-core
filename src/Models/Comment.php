<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use CSlant\Blog\Core\Models\Base\BaseComment;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Post
 *
 * @package CSlant\Blog\Core\Models
 *
 * @property int $id
 * @property int $reply_to
 * @property string $author_type
 * @property int $author_id
 * @property string $reference_type
 * @property int $reference_id
 * @property string $reference_url
 * @property string $name
 * @property string $email
 * @property string $website
 * @property string $content
 * @property string $status
 * @property string $ip_address
 * @property string $user_agent
 * @property Member $author
 *
 * @method static Builder|Post newModelQuery()
 * @method static Builder|Post newQuery()
 * @method static Builder|Post query()
 * @method static Builder|Post first()
 * @method static Builder|Post count()
 *
 * @mixin BaseComment
 */
#[AllowDynamicProperties]
class Comment extends BaseComment
{
}
