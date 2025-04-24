<?php

namespace CSlant\Blog\Core\Models;

use AllowDynamicProperties;
use CSlant\Blog\Core\Models\Base\BaseComment;

/**
 * Class Post
 *
 * @package CSlant\Blog\Core\Models
 *
 * @mixin BaseComment
 */
#[AllowDynamicProperties]
class Comment extends BaseComment
{
}
