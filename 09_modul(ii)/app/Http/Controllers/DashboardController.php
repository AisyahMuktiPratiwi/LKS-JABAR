<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('depan');
    }
    public function detail()
    {
        return view('detail');
    }
    public function checkout()
    {
        return view('checkout');
    }
}
