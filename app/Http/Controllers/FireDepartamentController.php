<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fire_departament;

class FireDepartamentController extends Controller
{

    public function index()
    {
        $depa = fire_departament::all();
        return view('administracion.departaments.index', compact('depa'));
    }

    public function create()
    {
        return view('administracion.departaments.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'txtnombre'=>'required',
            'datefundacion'=> 'required',
            'txtlogo' => 'required'
        ]);
        $depa = new fire_departament([
            'name' => $request->get('txtnombre'),
            'fundacion'=> $request->get('datefundacion'),
            'logo'=> $request->file('txtlogo')->store('public'),
        ]);

        $depa->save();
        return redirect('/admin/departament')->with('success', 'Student has been added');

    }

    public function view($id)
    {
        $depa  = fire_departament::findOrFail($id);
        return view('administracion.departaments.view',compact('depa'));
    }

    public function update ($id)
    {

    }

    public function edit ($id)
    {

    }
}
