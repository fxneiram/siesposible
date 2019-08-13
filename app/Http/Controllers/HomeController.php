<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\Product;
use App\Models\Votante;
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
        $votantes = Votante::all()->count();
        return view('home')
            ->with('count_votantes', $votantes)
            ->with('count_users', $users);
    }
}
