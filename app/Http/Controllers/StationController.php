<?php

namespace App\Http\Controllers;

use App\Station;
use App\fire_departament;
use Illuminate\Http\Request;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        return view('administracion.station.index', compact('stations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $firedepart= fire_departament::all();
        return view('administracion.station.create',compact('firedepart'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'abreviacion' => 'required',
            'direccion'    => 'required',
            'cuerpo'        =>'required',
            'alias'        => 'required'
        ]);
        $station = new station;
        $station->name         = $request->nombre;
        $station->abreviacion  = $request->abreviacion;
        $station->alias       = $request->alias;
        $station->address      = $request->direccion;
        $station->idfire_departament = $request->cuerpo;

        $station->save();
        return redirect('/admin/station');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function show(Station $station)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function edit(Station $station, $id)
    {
        $station= station::findOrFail($id);
        $firedepart= fire_departament::all();
        return view('administracion.station.update',compact('station','firedepart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Station $station)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function destroy(Station $station)
    {
        //
    }
}
