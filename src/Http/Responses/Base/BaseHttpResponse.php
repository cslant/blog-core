<?php

namespace CSlant\Blog\Core\Http\Responses\Base;

use Botble\Base\Http\Responses\BaseHttpResponse as BotbleBaseHttpResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class BaseHttpResponse
 *
 * @package CSlant\Blog\Core\Http\Responses\Base
 *
 * @method self setData(mixed $data)
 * @method JsonResource|JsonResponse|RedirectResponse|self toApiResponse()
 */
class BaseHttpResponse extends BotbleBaseHttpResponse
{
}
