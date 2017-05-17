<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Email;
use CodeAgenda\Entities\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function create($id)
    {
        $pessoa = Pessoa::find($id);

        return view('agenda.email.create', compact('pessoa'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email'
        ]);

        if($validator->fails()){
            return redirect()->route('email.create', ['id' => $request->pessoa_id])->withErrors($validator)->withInput();
        }

        Email::create($request->all());
        return redirect()->route('pessoa.detalhes', ['id' => $request->pessoa_id]);
    }


    public function alterar( $id )
    {
        $email = Email::find($id);
        $pessoa = $email->pessoa;
        return view('agenda.email.editar', compact('email', 'pessoa'));
    }


    public function update(Request $request, $id )
    {
        $email = Email::find($id);
        $pessoa = $email->pessoa;

        $validator = Validator::make($request->all(), [
            'email'     => 'required|email'
        ]);

        if($validator->fails()){
            return redirect()->route('email.alterar', ['id' => $id])->withErrors($validator)->withInput();
        }

        $email->fill($request->all())->save();
        return redirect()->route('pessoa.detalhes', ['id' => $pessoa->id]);
    }


    public function delete($id)
    {
        $email = Email::find($id);
        $pessoa = $email->pessoa;
        return view('agenda.email.delete', compact('email', 'pessoa'));
    }


    public function destroy( $id )
    {
        Email::destroy($id);

        return redirect()->route('agenda.index');
    }


}