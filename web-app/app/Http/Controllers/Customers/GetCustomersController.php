<?php

declare(strict_types=1);

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Customer\GetCustomersUseCaseInterface;

class GetCustomersController extends Controller
{
    public function __construct(
        private GetCustomersUseCaseInterface $customersUseCase
    )
    {}

    public function execute(): JsonResponse
    {
        $customers = $this->customersUseCase->execute();
        return response()->json($customers);
    }
}
