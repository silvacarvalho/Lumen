<div class="panel panel-default @if($pessoa->sexo == "Masculino") panel-info @else panel-danger @endif">
    <div class="panel-heading"><h3 class="panel-title"> @if($pessoa->sexo == "Masculino")
                <i class=" fa fa-male"></i> @else <i class=" fa fa-female"></i> @endif {{ $pessoa->apelido }}
            - {{ $pessoa->nome  }} <span class="pull-right"> <a
                        href="{{ route('pessoa.alterar', ['id' => $pessoa->id ]) }}" class="btn btn-success btn-xs"
                        data-toggle="tooltip" data-placement="top" title="Editar contato"> <i
                            class="fa fa-edit"></i> </a> <a
                        href="{{ route('pessoa.delete', ['id' => $pessoa->id]) }}" class="btn btn-danger btn-xs"
                        data-toggle="tooltip" data-placement="top" title="Apagar contato"> <i
                            class="fa fa-minus-circle"></i> </a> </span></h3></div>
    <div class="panel-body">
        <ul class="nav nav-pills  nav-justified" role="tablist">
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#{{ $pessoa->id }}Phone" role="tab"
                                    aria-controls="home">Telefones</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#{{ $pessoa->id }}Email" role="tab"
                                    aria-controls="home">E-Mails</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="{{ $pessoa->id }}Phone"
                 role="tabpanel"> @include('agenda.partials.telefones', ['telefones' => $pessoa->telefones]) </div>
            <div class="tab-pane" id="{{ $pessoa->id }}Email"
                 role="tabpanel"> @include('agenda.partials.emails', ['emails' => $pessoa->emails]) </div>
        </div>
    </div>
</div>