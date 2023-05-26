<?php
declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\AuthModels\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\UserModel;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Auth\RegisterUserUseCaseInterface;
use Rentacar\Application\DTOs\AuthDTOs\Input\RegisterDTO;

class RegisterController extends Controller
{
    public function __construct(
        private RegisterUserUseCaseInterface $registerUserUseCase
    )
    {}

    public function execute(RegisterRequest $request): JsonResponse
    {
        $usr = $this->registerUserUseCase->execute(RegisterDTO::fromRequest($request));
        return response()->json(new UserModel($usr));
    }
}
