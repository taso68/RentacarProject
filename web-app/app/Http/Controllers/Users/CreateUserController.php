<?php
declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use Illuminate\Http\JsonResponse;
use Rentacar\Application\Contracts\UseCases\Users\CreateUserUseCaseInterface;
use Rentacar\Application\DTOs\UserDTOs\Input\CreateUserDTO;

class CreateUserController extends Controller
{
    public function __construct(
        private CreateUserUseCaseInterface $createUserUseCase
    )
    {}

    public function execute(CreateUserRequest $request): JsonResponse
    {

        return response()->json($this->createUserUseCase->execute(CreateUserDTO::fromRequest($request)));
    }

}
