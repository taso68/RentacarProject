<?php
declare(strict_types=1);

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Http\Requests\Car\UpdateCarRequest;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Car\UpdateCarUseCaseInterface;
use Rentacar\Application\DTOs\CarDTOs\Input\UpdateCarDto;

class UpdateCarController extends Controller
{
    public function __construct(
        private UpdateCarUseCaseInterface $updateCarUseCase
    )
    {}

    public function execute(UpdateCarRequest $request): JsonResponse
    {
        $updatedCar = $this->updateCarUseCase->execute(UpdateCarDto::fromRequest($request->all()));
        return response()->json($updatedCar);
    }
}
