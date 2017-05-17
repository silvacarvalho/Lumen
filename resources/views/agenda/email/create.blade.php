@extends('agenda.layout')
@section('content')

    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">Cadastro de novo E-Mail para <code>{{ $pessoa->nome }}</code></div>
            <div class="panel-body">
                <form action="{{ route('email.store') }}" method="post">
                    <input type="hidden" value="{{ $pessoa->id }}" name="pessoa_id">
                    <div class="form-group">
                        <label for="email">Descrição</label>
                        <select name="descrição" class="form-control">
                            <option value="">::Selecione::</option>
                            <option value="Pessoal">Pessoal</option>
                            <option value="Profissional">Profissional</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Informar o email a ser cadastrado">
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar E-Mail</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

@endsection