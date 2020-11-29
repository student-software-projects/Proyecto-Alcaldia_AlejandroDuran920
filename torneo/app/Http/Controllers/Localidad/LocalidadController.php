<?php

namespace App\Http\Controllers\Localidad;

use App\Http\Controllers\Controller;
use App\Models\Localidad;
use Illuminate\Http\Request;

class LocalidadController extends Controller
{
    public function index()
    {
        $localidades = Localidad::all();
        return view('localidad.index', compact('localidades'));
    }

    public function create()
    {
        return view('localidad.create');
    }

    public function store(Request $request)
    {
        Localidad::create($request->all());
        return redirect()->route('localidad.index')->with([
            'message' => 'Se a creado un nuevo registro',
            'type' => 'success'
        ]);
    }

    public function destroy($id)
    {
        Localidad::find($id)->delete();
        return redirect()->route('localidad.index');
    }
    public function show($id){
        $localidades=Localidad::find($id);
        return  view('Localidad.show', compact( 'localidades' ));
    }

    public function edit($id)
    {
        $localidades = Localidad::findOrFail($id);
        return view('localidad.edit', compact('localidades'));
    }

    public function update(Request $request, $id){
        $localidades=Localidad::find($id)->update($request->all());
        return redirect()->route('localidad.show',$id)->with([
            'message'=>'Se a actualizado correctmente el usuario',
            'type'=>'info'
        ]);
    }

}


