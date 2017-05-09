@extends('agenda.layout')
@section('content')
    <div class="col-md-6">
        <form action="{{ route('pessoa.update', ['id' => $pessoa->id]) }}" method="post">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo" value="{{ $pessoa->nome }}">
            </div>
            <div class="form-group">
                <label for="apelido">Apelido</label>
                <input type="text" name="apelido" class="form-control" id="apelido" placeholder="Apelido" value="{{ $pessoa->apelido }}">
            </div>

            <div class="radio">
                <label>
                    <input type="radio" name="sexo" value="Feminino" {{ ($pessoa->sexo == 'Feminino') ? 'checked':null }}> <i class="fa fa-female"></i>
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="sexo" value="Masculino" {{ ($pessoa->sexo == 'Masculino') ? 'checked':null }}> <i class="fa fa-male"></i>
                </label>
            </div>
            <button type="submit" class="btn btn-default">Alterar</button>
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

        @include('agenda.partials.telefones', ['telefones' => $pessoa->telefones])
    </div>
@endsection