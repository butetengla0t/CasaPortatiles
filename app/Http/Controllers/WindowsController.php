<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WindowsController extends Controller
{
    public function index() {
        return view('windows.windows');
    }
}
