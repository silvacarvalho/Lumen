@extends('agenda.layout')

@section('content')
    <?php $count = 0;?>

    @foreach($pessoas as $pessoa)

        @if($count%3 != 0)
            <div class="col-md-6">
                @include('agenda.partials.contato')
            </div>
        @elseif(count($pessoas)-1 != $count)
            </div>
            <div class="row">
        @endif
    <?php $count++; ?>

    @endforeach

@endsection