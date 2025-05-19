<?php

namespace CSlant\Blog\Core\Enums;

enum StatusEnum: string
{
    case PUBLISHED = 'published';

    case DRAFT = 'draft';

    case PENDING = 'pending';
}
