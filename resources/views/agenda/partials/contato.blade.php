<div class="panel panel-default @if($pessoa->sexo == "Masculino") panel-info @else panel-warning @endif">
    <div class="panel-heading">
        <h3 class="panel-title">
            @if($pessoa->sexo == "Masculino")
                <i class=" fa fa-male"></i>
            @else
                <i class=" fa fa-female"></i>
            @endif
            {{ $pessoa->apelido }}
            <span class="pull-right">
                <a href="{{ route('pessoa.alterar', ['id' => $pessoa->id ]) }}" class="btn btn-success btn-xs" data-toggle="tooltip"
                   data-placement="top" title="Editar contato"> <i class="fa fa-edit"></i> </a>

                <a href="{{ route('pessoa.delete', ['id' => $pessoa->id]) }}" class="btn btn-danger btn-xs" data-toggle="tooltip"
                   data-placement="top" title="Apagar contato"> <i class="fa fa-minus-circle"></i> </a>
            </span>
        </h3>

    </div>
    <div class="panel-body">
        <h4> {{ $pessoa->nome  }} </h4>
        @include('agenda.partials.telefones', ['telefones' => $pessoa->telefones])
    </div>
</div>