<?php

use Illuminate\Support\Facades\Route;

function test_helper() {
    echo "ok";
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
