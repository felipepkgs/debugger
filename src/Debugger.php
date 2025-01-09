<?php

namespace FelipePkgs\Debugger;

class Debugger
{
    public function __construct()
    {
        // Constructor
    }

    public function debug($message) {
        Illuminate\Support\Facades\Log::debug($message);
    }
}