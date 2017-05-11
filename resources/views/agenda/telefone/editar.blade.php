@extends('agenda.layout')

@section('content')
    <div class="col-md-6">
        <form class="form-group-lg" action="{{ route('telefone.update', ['id' => $telefone->id]) }}" method="post">
            <input type="hidden" name="_method" value="PUT">
            {{--<input type="hidden" name="pessoa_id" value="{{ //$pessoa->id }}">--}}
            <div class="form-group">
                <label class="sr-only" for="descrição">Descrição</label>
                <select name="descrição" class="form-control" placeholder="Descição do telefone">
                    <option value="">:: Selecione ::</option>
                    <option value="Comercial" {{ ($telefone->descrição == 'Comercial') ? 'selected': false }}>Comercial</option>
                    <option value="Residencial" {{ ($telefone->descrição == 'Residencial') ? 'selected': false }}>Residencial</option>
                    <option value="Recados" {{ ($telefone->descrição == 'Recados') ? 'selected': false }}>Recados</option>
                    <option value="Celular" {{ ($telefone->descrição == 'Celular') ? 'selected': false }}>Celular</option>
                </select>
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(94) 99999 9999"
                       value="+{{ $telefone->codpais }} {{ $telefone->ddd }} {{ $telefone->prefixo }} {{ $telefone->sufixo }}" >
            </div>
            <button type="submit" class="btn btn-primary">Salvar alteração</button>
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
            @include('agenda.partials.contato')
    </div>
@endsection