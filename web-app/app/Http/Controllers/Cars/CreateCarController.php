<?php
declare(strict_types=1);

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCarRequest;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Car\CreateCarUseCaseInterface;

class CreateCarController extends Controller
{
    public function __construct(
        CreateCarUseCaseInterface $createCarUseCase
    ) {}

    public function execute(CreateCarRequest $createCarRequest): JsonResponse
    {
        return response()->json($createCarRequest);
    }
}
