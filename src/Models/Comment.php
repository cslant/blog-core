<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use CSlant\Blog\Core\Models\Base\BaseComment;

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
 *
 * @mixin BaseComment
 */
#[AllowDynamicProperties]
class Comment extends BaseComment
{
}
