<?php

namespace CSlant\Blog\Core\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class NotFoundHandler extends ExceptionHandler
{
    public function render($request, Throwable $e): Response|JsonResponse|RedirectResponse|\Symfony\Component\HttpFoundation\Response
    {
        if ($e instanceof NotFoundHttpException) {
            return redirect('https://cslant.com/not-found', 301);
        }

        return parent::render($request, $e);
    }
}
