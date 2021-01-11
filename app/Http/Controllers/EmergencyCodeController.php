<?php

namespace App\Http\Controllers;

use App\emergency_code;
use Illuminate\Http\Request;

class EmergencyCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $code  = emergency_code::all();
        return view('administracion.emergency_code.index',compact('code'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.emergency_code.create');
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
            'code'          => 'required|max:255',
            'description'   => 'required',
            'voceo'         => 'required'
        ]);

        $Code = new emergency_code;
        $Code->code          = $request->code;
        $Code->description   = $request->description;
        $Code->voceo_clave   = $request->voceo;


        $Code->save();
        return redirect('/admin/code');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\emergency_code  $emergency_code
     * @return \Illuminate\Http\Response
     */
    public function show(emergency_code $emergency_code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\emergency_code  $emergency_code
     * @return \Illuminate\Http\Response
     */
    public function edit(emergency_code $emergency_code, $id)
    {
        $code  = emergency_code::findOrFail($id);
        return view('administracion.emergency_code.edit',compact('code'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\emergency_code  $emergency_code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, emergency_code $emergency_code)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\emergency_code  $emergency_code
     * @return \Illuminate\Http\Response
     */
    public function destroy(emergency_code $emergency_code)
    {
        //
    }
}
