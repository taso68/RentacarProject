<?php
declare(strict_types=1);

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Car\UpdateCarUseCaseInterface;
use function GuzzleHttp\Promise\all;

class UpdateCarController extends Controller
{
    public function __construct(
        private UpdateCarUseCaseInterface $carUseCase
    )
    {}

    public function execute(UpdateCarRequest $request): JsonResponse
    {
        return response()->json();
    }

}
