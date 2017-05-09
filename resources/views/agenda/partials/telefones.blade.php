<p>
    <a class="btn btn-info fa fa-plus-square" href="{{ route('telefone.create', ['id' => $pessoa->id]) }}"> Novo Telefone</a>
</p>

<table class="table table-responsive hover">
    @foreach($telefones as $telefone)
        <tr>
            <td>{{ $telefone->descriçao }}</td>
            <td>{{ $telefone->numero }}</td>
            <td>
                <a href="{{ route('telefone.delete', ['id' => $telefone->id]) }}">
                    <i class="fa fa-minus-circle" data-toggle="tooltip" data-placement="top" title="Apagar contato"></i>
                </a>
            </td>
        </tr>
    @endforeach
</table>