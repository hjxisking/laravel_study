<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepostitory;
use App\Services\TestService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public $userRepository;

    function __construct(UserRepostitory $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function test (User $user) {
        echo $this->userRepository->name($user);
    }
}
