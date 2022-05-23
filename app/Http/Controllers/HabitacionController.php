<?php

namespace App\Http\Controllers;

use App\Models\Habitacione;

use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-habitaciones | crear-habitacion | editar-habitacion | borrar-habitacion', ['only'=>['index']]);
        $this->middleware('permission:crear-habitacion', ['only'=>['create','store']]);
        $this->middleware('permission:editar-habitacion', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-habitacion', ['only'=>['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitaciones = Habitacione::paginate(5);
        return view('habitaciones.index', compact('habitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habitaciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tipo' => 'required',
            'descripcion' => 'required',
            'capacidad' => 'required',
            'precio' => 'required',
        ]);
        Habitacione::create($request->all());
        return redirect()->route('habitaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Habitacione $habitacion)
    {
        return view('habitaciones.editar', compact('habitacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitacione $habitacion)
    {
        request()->validate([
            'tipo' => 'required',
            'descripcion' => 'required',
            'capacidad' => 'required',
            'precio' => 'required',
        ]);
        $habitacion->update($request->all());
        return redirect()->route('habitaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habitacione $habitacion)
    {
        $habitacion->delete();
        return redirect()->route('habitaciones.index');
    }
}
