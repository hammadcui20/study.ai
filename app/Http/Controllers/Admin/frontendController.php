<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index()
    {
        return view('Admin.dashboard');
    }

    public function tailorindex()
    {
        return view('tailor.dashboard');
    }
}
