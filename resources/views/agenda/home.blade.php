@extends('agenda.layout2')

@section('content')
    <?php $count = 0;?>

    @foreach($pessoas as $pessoa)
        @include('agenda.partials.contato')
    @endforeach

@endsection

