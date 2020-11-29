<?php

namespace App\Http\Controllers\Jugador;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index(){
        $jugadores=Jugador::all();
        return view('jugador.index',compact('jugadores'));
    }
    public function create(){
        $equipos=Equipo::all();
        return view('jugador.create',compact('equipos'));
    }
    public function store(Request $request){
        Jugador::create($request->all());
        return redirect()->route('jugador.index');
    }
    public function destroy($id){
        Jugador::find($id)->delete();
        return self::show();
    }
    public function show (){
        $equipos=Equipo::get();
        $jugadores=Jugador::get();
        return view('jugador.show', compact('equipos','jugadores'));
    }
    public function edit($id){
        $jugadores=Jugador::findOrFail($id);
        $equipos=Equipo::all();
        return view('jugador.edit',compact('jugadores','equipos'));
    }
    public function update(Request $request, $id){
        $datosexception = request()->except(['_token', '_method']);
        Jugador::where('id', '=', $id)->update($datosexception);

        return redirect('jugador')->with('edit', 'jugador Actualizado');
    }

}
