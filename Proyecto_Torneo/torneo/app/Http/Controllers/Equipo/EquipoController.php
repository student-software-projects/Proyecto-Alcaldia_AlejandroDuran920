<?php

namespace App\Http\Controllers\Equipo;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use App\Models\Localidad;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index (){
        $equipos=Equipo::all();
        return view('equipo.index', compact('equipos'));
    }
    public function create (){
        $localidades = Localidad::get();
        return view('equipo.create',compact('localidades'));
    }
    public function store (Request $request)
    {
        // return $request->all();
        // Crea empresa

        Equipo::create($request->all());
        return redirect()->route('equipo.index')->with([
            'message'=>'Se a creado un nuevo registro',
            'type'=>'success'
        ]);
    }

    public function show($id){
        $equipos = Equipo::find($id);
        $localidades = Localidad::all();
        return view('equipo.show', compact('equipos','localidades'));
    }


    public function destroy($id){
        Equipo::find($id)->delete();
        return self::show();
    }
    public function edit($id){
        $equipos=Equipo::findOrFail($id);
        $localidades=Localidad::all();
        return view('equipo.edit', compact('equipos','localidades'));
    }
    public function update(Request $request, $id){
        $datosexception = request()->except(['_token', '_method']);
        Equipo::where('id', '=', $id)->update($datosexception);

        return redirect('equipo')->with('edit', 'Empresa Actualizada');
    }

}
