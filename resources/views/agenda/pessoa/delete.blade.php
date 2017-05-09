@extends('agenda.layout')

@section('content')
    <div class="col-md-6">
        <h3>Deseja mesmo apagar este contato?</h3>

        <form action="{{ route('pessoa.destroy', ['id'=>$pessoa->id]) }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Apagar</button>
            <a href="{{ route('agenda.index') }}" class="btn btn-primary">
                <i class="fa fa-rotate-left"></i>
                Voltar
            </a>
        </form>
    </div>

    <div class="col-md-6">
        @include('agenda.partials.contato')
    </div>
@endsection