<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MusicaisInstrumento;

class XmlController extends Controller
{
    public function gerarXml(){
        $dados = MusicaisInstrumento::all();
        //print_r($dados);

        return response()->view('data-xml',['registro'=> $dados])->header('Content-Type','application/xml');
    }
}
