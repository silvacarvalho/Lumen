<table class="table table-responsive table-hover">
    @foreach($emails as $email)
        <tr>
            <td>{{ $email->descrição}}</td>
            <td>{{ $email->email}}</td>
            <td>
                <a href="{{ route('email.alterar', ['id' => $email->id]) }}">
                    <i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Editar e-mail"></i>
                </a>
            </td>
            <td>
                <a href="{{ route('email.delete', ['id' => $email->id]) }}">
                    <i class="fa fa-minus-circle" data-toggle="tooltip" data-placement="top" title="Apagar e-mail"></i>
                </a>
            </td>
        </tr>
    @endforeach
</table>

<p class="text-right">
    <a class="btn btn-primary glyphicon glyphicon-plus" href="{{ route('email.create', ['id' => $pessoa->id]) }}"></a>
</p>