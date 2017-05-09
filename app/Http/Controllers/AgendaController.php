<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 05/05/17
 * Time: 15:54
 */


namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index( $letra = false )
    {
        $pessoas = Pessoa::where('apelido', 'like', $letra . '%')->get();

        return view('agenda.agenda', compact('pessoas', 'letras'));
    }


    public function busca( Request $request)
    {
        $busca = $request->busca;
        $pessoas = [];
        if(!empty($busca)){
            $pessoas = Pessoa::where('nome', 'like', "%{$busca}%")
                ->orWhere('apelido', 'like', "%{$busca}%")->get();
        }

        return view('agenda.agenda', compact('pessoas', 'letras'));
    }
}