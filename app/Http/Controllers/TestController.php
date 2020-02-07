<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\TestService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function test (TestService $testService, User $user) {
        $testService->say();
        var_dump($user);
        //var_dump($id);
    }
}
