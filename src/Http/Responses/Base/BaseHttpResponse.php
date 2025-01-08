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
 * @method self with(array $with)
 * @method static self make()
 * @method self withInput()
 * @method self withError()
 * @method self withMessage(string $message)
 * @method self withPreviousUrl(string $url)
 * @method self withNextUrl(string $url)
 * @method self setError(bool $error = true)
 * @method self setCode(int $code)
 * @method self setSaveAction(string $action)
 * @method self setMessage(?string $message, bool $cleanHtmlTags = true)
 *
 * @method JsonResource|JsonResponse|RedirectResponse|self toApiResponse()
 */
class BaseHttpResponse extends BotbleBaseHttpResponse
{
}
