<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home() {
        return 'Hello, home!';
    }
}
