@extends('agenda.layout')

@section('content')
    <div class="col-md-6">
        <form class="form-group-lg" action="{{ route('email.update', ['id' => $email->id]) }}" method="post">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="email">Descrição</label>
                <select name="descrição" class="form-control">
                    <option value="">::Selecione::</option>
                    <option value="{{ ($email->descrição == 'Pessoal') ? 'selected': false }}">Pessoal</option>
                    <option value="{{ ($email->descrição == 'Profissional') ? 'selected': false }}">Profissional</option>
                </select>
            </div>
            <div class="form-group">
                <label class="sr-only" for="email">E-Mail</label>
                <input type="text" class="form-control" name="email" id="email" placeholder='exemple@email.com'
                       value="{{ $email->email }}" >
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