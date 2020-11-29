<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        return view('modules.dashboard.index');
    }
    public function perfil()
    {
        $usuario = User::find(session('USER')->id);
        return view('modules.dashboard.perfil', compact('usuario')) ;

    }
}
