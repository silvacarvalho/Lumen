<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    public function index( $letra = false )
    {
        $pessoas = Pessoa::where('nome', 'like', $letra . '%')
                   ->orWhere('nome', 'like', $letra . '%')->get();

//        foreach ($pessoas as $pessoa){
//            dd($pessoa->nome);
//        }
        return view('agenda.agenda', compact('pessoas', 'letras'));
    }


    public function busca( Request $request)
    {
        $busca = $request->busca;
        $pessoas = [];
        if(!empty($busca)){
            $pessoas = Pessoa::join('emails', 'emails.pessoa_id', '=', 'pessoas.id')
                ->where('pessoas.nome', 'like', "%{$busca}%")
                ->where('pessoas.apelido', 'like', "%{$busca}%")
                ->where('emails.email', 'like', "%{$busca}%")->get();
        }

        return view('agenda.agenda', compact('pessoas', 'letras'));
    }
}