@extends('agenda.layout')
@section('content')
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">{{ $pessoa->nome }}</div>
            <div class="panel-body">
                <form action="{{ route('telefone.store') }}" method="post">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <select name="descrição" class="form-control" placeholder="Descição do telefone">
                            <option value="">:: Selecione ::</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Residencial">Residencial</option>
                            <option value="Recados">Recados</option>
                            <option value="Celular">Celular</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(99) 9999 9999">
                    </div>
                    <button type="submit" class="btn btn-default">Salvar</button>
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