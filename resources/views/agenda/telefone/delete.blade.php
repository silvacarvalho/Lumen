@extends('agenda.layout')

@section('content')
    <div class="col-md-6">
        <h3>
            Deseja mesmo excluir este telefone?<br/>
            <small>{{ $telefone->descriçao }}: {{ $telefone->numero }}</small>
        </h3>

        <form action="{{ route('telefone.destroy', ['id'=>$telefone->id]) }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit">Apagar</button>
            <a href="{{ route('agenda.index') }}" class="btn btn-primary"> <i class="fa fa-rotate-left"></i> Voltar</a>
        </form>
    </div>

    <div class="col-md-6">
        @include('agenda.partials.contato')
    </div>
@endsection