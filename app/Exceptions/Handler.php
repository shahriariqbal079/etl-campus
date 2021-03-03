<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{

    protected $dontReport = [
        //
    ];

    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /* public function render($request, Throwable $exception)
    {
    return parent::render($request, $exception);
    } */

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof AuthenticationException) {
            $guard = Arr::get($exception->guards(), 0);
            switch ($guard) {

                case 'admin':
                    return redirect(route('admin.login'));
                    break;

                default:
                    return redirect(route('login'));
                    break;
            }
        }

        return parent::render($request, $exception);
    }
}
