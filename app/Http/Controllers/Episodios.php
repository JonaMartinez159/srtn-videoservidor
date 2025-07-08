<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Episodios extends Controller
{
    public function show($id_programa){

        return view('episodios', ['id_programa'=>$id_programa]);
    }
}
