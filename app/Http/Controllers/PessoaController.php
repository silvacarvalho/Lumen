<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 07/05/17
 * Time: 17:22
 */

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PessoaController extends Controller
{

    public function create()
    {
        return view('agenda.pessoa.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome'      => 'required|min:3|max:50|unique:pessoas',
            'apelido'   => 'required|min:2| max:50',
            'sexo'      => 'required'
        ]);

        if($validator->fails()){
            return redirect()->route('pessoa.create')->withErrors($validator)->withInput();
        }

        $pessoa = Pessoa::create($request->all());
        $id = $pessoa->id;
        return redirect()->route('pessoa.detalhes', ['id' => $id]);
    }

    public function delete($id)
    {
        $pessoa = Pessoa::find($id);

        return view('agenda.pessoa.delete', compact('pessoa'));
    }

    public function destroy( $id )
    {
        Pessoa::destroy($id);

        return redirect()->route('agenda.index');
    }

    public function alterar($id)
    {
        $pessoa = Pessoa::find($id);

        return view('agenda.pessoa.editar', compact('pessoa'));
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::find($id);

        $validator = Validator::make($request->all(), [
            'nome' => 'required|min:3|max:50|unique:pessoas,nome,'. $pessoa->id,
            'apelido' => 'required|min:2| max:50',
            'sexo'      => 'required'
        ]);

        if($validator->fails()){
            return redirect()->route('pessoa.alterar')->withErrors($validator)->withInput();
        }

        $pessoa->fill($request->all())->save();
        $id = $pessoa->id;
        return redirect()->route('pessoa.detalhes', ['id' => $id]);
    }

    public function detalhes($id)
    {
        $pessoa = Pessoa::find($id);

        return view( 'agenda.pessoa.detalhes', compact('pessoa'));
    }
}