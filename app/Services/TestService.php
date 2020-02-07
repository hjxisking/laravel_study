<?php

namespace App\Services;

class TestService {
    public $id;

    public function __construct()
    {
        $this->id = 1;
    }

    public function say() {
        echo $this->id;
    }
}
