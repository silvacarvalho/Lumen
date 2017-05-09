@extends('agenda.layout')

@section('content')
    <div class="col-md-6">
        <h3>Detalhes do contato
            <small>
                <a href="{{ route('agenda.index') }}" class="btn btn-primary">
                    <i class="fa fa-rotate-left"></i>
                    Voltar
                </a>
            </small>
        </h3>
        @include('agenda.partials.contato')
    </div>
@endsection