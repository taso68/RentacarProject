<?php
declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Users\GetUserUseCaseInterface;

class GetUserController extends Controller
{
    public function __construct(
        private GetUserUseCaseInterface $getUserUseCase
    )
    {}

    public function execute(int $id): JsonResponse
    {
        return response()->json(
            new UserModel($this->getUserUseCase->execute($id))
        );
    }
}
