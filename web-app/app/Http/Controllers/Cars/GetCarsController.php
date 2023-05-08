<?php
declare(strict_types=1);

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Models\CarModel;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Car\GetCarsUseCaseInterface;

class GetCarsController extends Controller
{
    public function __construct(
        private GetCarsUseCaseInterface $getCarsUseCase
    )
    {}
    public function execute(): JsonResponse
    {
        $cars = $this->getCarsUseCase->execute();
        return response()->json(CarModel::listModel($cars));
    }
}
