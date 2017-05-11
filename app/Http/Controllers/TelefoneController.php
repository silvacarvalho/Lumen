<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 07/05/17
 * Time: 17:22
 */

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa;
use CodeAgenda\Entities\Telefone;
use CodeAgenda\Entities\Functions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TelefoneController extends Controller
{

    public function create( $id )
    {
        $pessoa = Pessoa::find($id);
        return view('agenda.telefone.create', compact('pessoa'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'descrição'     => 'required',
            'telefone'      => 'required'
        ]);

        if($validator->fails()){
            return redirect()->route('telefone.create', ['id' => $request->pessoa_id])->withErrors($validator)->withInput();
        }

        $request->merge(Functions::MapPhoneData($request->all()));

        Telefone::create($request->except('telefone'));
        return redirect()->route('pessoa.detalhes', ['id' => $request->pessoa_id]);
    }

    public function delete($id)
    {
        $telefone = Telefone::find($id);
        $pessoa = $telefone->pessoa;
        return view('agenda.telefone.delete', compact('telefone', 'pessoa'));
    }

    public function destroy( $id )
    {
        Telefone::destroy($id);

        return redirect()->route('agenda.index');
    }

    public function alterar($id)
    {
        $telefone = Telefone::find($id);
        $pessoa = $telefone->pessoa;
        return view('agenda.telefone.editar', compact('telefone', 'pessoa'));
    }

    public function update(Request $request, $id)
    {
        $telefone = Telefone::find($id);
        $pessoa = $telefone->pessoa;

        $validator = Validator::make($request->all(), [
            'descrição'     => 'required',
            'telefone'      => 'required'
        ]);

        if($validator->fails()){
            return redirect()->route('telefone.alterar', ['id' => $id])->withErrors($validator)->withInput();
        }

        $request->merge(Functions::MapPhoneData($request->all(), $id));

        DB::table('telefones')->where('id', $id)->update($request->except('telefone', '_method', 'pessoa_id'));

        return redirect()->route('pessoa.detalhes', ['id' => $pessoa->id]);
    }

}