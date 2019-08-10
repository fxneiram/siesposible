<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\Product;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->count();
        return view('home')
            ->with('count_users', $users);
    }
}
