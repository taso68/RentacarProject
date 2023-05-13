<?php
declare(strict_types=1);

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Http\Requests\Car\CreateCarRequest;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Car\CreateCarUseCaseInterface;
use Rentacar\Application\DTOs\CarDTOs\Input\CreateCarDTO;

class CreateCarController extends Controller
{
    public function __construct(
        private CreateCarUseCaseInterface $createCarUseCase
    ) {}

    public function execute(CreateCarRequest $createCarRequest): JsonResponse
    {
        $newCar = $this->createCarUseCase->execute(CreateCarDTO::fromRequest($createCarRequest->all()));
        return response()->json($newCar);
    }
}
