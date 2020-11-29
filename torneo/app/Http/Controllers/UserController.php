<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }
    public function store (Request $request)
    {
        // return $request->all();
        // Crea empresa

        User::create($request->all());
        return view('welcome');
    }

}
