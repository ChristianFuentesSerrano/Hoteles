<?php

namespace App\Http\Controllers;

use App\Models\Habitacione;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    public function index(){

        $habitaciones = Habitacione::all();

        return view('habitacion', compact('habitaciones'));
    }
}
