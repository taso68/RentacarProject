<?php

declare(strict_types=1);

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use App\Models\CustomerModel;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Customer\GetCustomerByIdUseCaseInterface;

class GetCustomerByIdController extends Controller
{
    public function __construct(
        private GetCustomerByIdUseCaseInterface $getCustomerByIdUseCase
    )
    {}

    public function execute(int $id): JsonResponse
    {
        return response()->json(
            new CustomerModel($this->getCustomerByIdUseCase->execute($id))
        );
    }

}
