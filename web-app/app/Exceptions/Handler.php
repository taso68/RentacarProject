<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Rentacar\Infrastructure\DataAccess\Exceptions\EntityAlreadyExistException;
use Rentacar\Infrastructure\DataAccess\Exceptions\EntityNotFoundException;
use Throwable;

class Handler extends ExceptionHandler
{
//    public function render($request, Throwable $e): JsonResponse
//    {
//        if($e instanceof EntityAlreadyExistException) {
//            return response()->json([
//                'error' => $e->getMessage(),
//            ], $e->getCode());
//        }
//
//        if($e instanceof EntityNotFoundException) {
//            return response()->json([
//                'error' => $e->getMessage(),
//            ], $e->getCode());
//        }
//        return parent::render($request, $e);
//    }

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
