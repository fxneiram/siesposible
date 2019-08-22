<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\Evento;
use App\Models\Lider;
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
        $lideres = Lider::all()->count();
        $eventos = Evento::all()->count();
        $positions = [];
        //3.8700702,-67.9215287,15z
        for ($x = 0; $x < 1000; $x++) {
            array_push($positions, random_pos2());
        }

        $positions2 = [];
        //3.8700702,-67.9215287,15z
        for ($x = 0; $x < 1000; $x++) {
            array_push($positions2, random_pos2());
        }
//posiciones reales;
        $pos_votantes = Votante::query()
            ->select(['gps'])
            ->whereNotNull('gps')
            ->get()
            ->toArray();
        for ($x = 0; $x < sizeof($pos_votantes); $x++) {
            $pos_votantes[$x] = prepare_gps_pos($pos_votantes[$x]['gps']);
        }

        return view('home')
            ->with('pos', json_encode($positions, JSON_HEX_QUOT | JSON_HEX_APOS))
            ->with('pos2', json_encode($positions2, JSON_HEX_QUOT | JSON_HEX_APOS))
            ->with('pos3', json_encode($pos_votantes, JSON_HEX_QUOT | JSON_HEX_APOS))
            ->with('count_eventos', $eventos - 1)
            ->with('count_votantes', $votantes)
            ->with('count_lideres', $lideres - 1)
            ->with('count_users', $users);
    }
}
