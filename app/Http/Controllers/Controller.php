<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;

abstract class Controller
{
    public function index(Request, $request, $testId);


}
