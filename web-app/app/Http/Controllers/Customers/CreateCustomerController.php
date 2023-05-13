<?php

declare(strict_types=1);

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CreateCustomerRequest;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Customer\CreateCustomerUseCaseInterface;
use Rentacar\Application\DTOs\CustomerDTOs\Input\CreateCustomerDTO;

class CreateCustomerController extends Controller
{
    public function __construct(
        private CreateCustomerUseCaseInterface $createCustomerUseCase
    )
    {}

    public function execute(CreateCustomerRequest $request): JsonResponse
    {
        $newCustomer = $this->createCustomerUseCase->execute(CreateCustomerDTO::fromRequest($request->all()));

        return response()->json($newCustomer);
    }
}
