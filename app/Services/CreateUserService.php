<?php

namespace App\Services;

use App\Contracts\IUserRepository;
use App\DTO\UserDTO;
use App\Exceptions\BusinessException;
use App\Models\User;

class CreateUserService
{
    public function __construct(private IUserRepository $repository)
    {

    }

    public function execute(UserDTO $userDTO): User
    {
        $userWithEmail = $this->repository->getUserByEmail($userDTO->getEmail());
        if ($userWithEmail !== null) {
            throw new BusinessException(__('messages.email_already_exists') ,400);
        }

        return $this->repository->createUser($userDTO);
    }
}
