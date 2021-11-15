<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserServiceImpl extends Service implements UserService
{

    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {

        $this->userRepository = $userRepository;

    }

    public function search(){
        echo '<br> User Service call Repository search(): '.__METHOD__;
        $this->userRepository->search();
    }

}