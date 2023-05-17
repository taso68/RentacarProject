<?php
declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\UserModel;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Users\UpdateUserUseCaseInterface;
use Rentacar\Application\DTOs\UserDTOs\Input\UpdateUserDTO;
use Rentacar\Application\DTOs\UserDTOs\Output\UserDTO;

class UpdateUserController extends Controller
{
    public function __construct(
        private UpdateUserUseCaseInterface $updateUserUseCase
    )
    {}

    public function execute(UpdateUserRequest $request): JsonResponse
    {
        return response()->json(
            new UserModel(
                $this->updateUserUseCase->execute(UpdateUserDTO::fromRequest($request))
            )
        );
    }
}
