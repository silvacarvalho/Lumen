@extends('agenda.layout')
@section('content')
    <div class="col-md-6">
        <form action="{{ route('pessoa.store') }}" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo" value="{{ old('nome') }}">
            </div>
            <div class="form-group">
                <label for="apelido">Apelido</label>
                <input type="text" name="apelido" class="form-control" id="apelido" placeholder="Apelido" value="{{ old('apelido') }}">
            </div>

            <div class="radio">
                <label>
                    <input type="radio" name="sexo" value="Feminino" {{ (old('sexo') == 'Feminino') ? 'checked':null }}> <i class="fa fa-female"></i>
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="sexo" value="Masculino" {{ (old('sexo') == 'Masculino') ? 'checked':null }}> <i class="fa fa-male"></i>
                </label>
            </div>
            <button type="submit" class="btn btn-default">Salvar</button>
        </form>
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