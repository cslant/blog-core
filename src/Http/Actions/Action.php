<?php

namespace CSlant\Blog\Core\Http\Actions;

use Botble\Base\Http\Controllers\Concerns\HasBreadcrumb;
use Botble\Base\Http\Controllers\Concerns\HasHttpResponse;
use Botble\Base\Http\Controllers\Concerns\HasPageTitle;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

/**
 * Base Action class providing common functionality for API actions
 *
 * @package CSlant\Blog\Api\Http\Actions
 * @group Blog Core
 */
class Action
{
    use HasBreadcrumb;
    use HasHttpResponse;
    use HasPageTitle;
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;
}
