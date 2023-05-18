<?php
declare(strict_types=1);

namespace App\Http\Controllers\Rents;

use App\Http\Controllers\Controller;
use App\Models\RentModel;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Rents\GetRentUseCaseInterface;

class GetRentController extends Controller
{
    public function __construct(
        private GetRentUseCaseInterface $getRentUseCase
    )
    {}

    public function execute(int $id): JsonResponse
    {
        $rent = $this->getRentUseCase->execute($id);
        return response()->json(new RentModel($rent));
    }
}
