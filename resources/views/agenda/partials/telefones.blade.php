<table class="table table-responsive table-hover">
    @foreach($telefones as $telefone)
        <tr>
            <td>{{ $telefone->descrição }}</td>
            <td>{{ $telefone->numero }}</td>
            <td>
                <a href="{{ route('telefone.alterar', ['id' => $telefone->id]) }}">
                    <i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Alterar telefone"></i>
                </a>
            </td>
            <td>
                <a href="{{ route('telefone.delete', ['id' => $telefone->id]) }}">
                    <i class="fa fa-minus-circle" data-toggle="tooltip" data-placement="top" title="Apagar telefone"></i>
                </a>
            </td>
        </tr>
    @endforeach
</table>
<p class="text-right">
    <a class="btn btn-primary glyphicon glyphicon-plus" href="{{ route('telefone.create', ['id' => $pessoa->id]) }}"></a>
</p>