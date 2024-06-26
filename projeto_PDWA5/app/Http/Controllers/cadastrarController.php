<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MusicaisInstrumento;

class cadastrarController extends Controller
{
    public function salvar(Request $request){
        $request->validate([
            "Nome" => "required"
        ],
        [
            "Nome.required" => "O campo instrumento deve ser preenchido"
        ]);
        //dd($request);
        $instrumento =  new MusicaisInstrumento();
        $instrumento->fill($request->all());
        $instrumento->save();

        return view('cadastrosalvo');
    }
}
