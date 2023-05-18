<?php
declare(strict_types=1);

namespace App\Http\Controllers\Rents;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rent\CreateRentRequest;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Rents\CreateRentUseCaseInterface;
use Rentacar\Application\DTOs\RentDTOs\Input\CreateRentDTO;

class CreateRentController extends Controller
{
    public function __construct(
        private CreateRentUseCaseInterface $createRentUseCase
    )
    {}

    public function execute(CreateRentRequest $request): JsonResponse
    {
        $this->createRentUseCase->execute(CreateRentDTO::fromRequest($request->all()));
        return response()->json($request);
    }
}
