@extends ('base')

@section('titulo', 'Laravel')

@section('main')
    <h1>Usuários</h1>
    <br>

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th colspan="2">Ações</th>
        </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->nome }}</td>
        <td>({{ $user->email }})</td>
        <td><a href="/edit-usuario/{{$user->id}}" class="btn btn-warning">Editar</a></td>
        <td>
        <form action="/del-usuario/{{$user->id}}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
    @csrf
    @method('delete')
    <input type="submit" value="Excluir" class="btn btn-danger">
</form>

        </td>
    </tr>
    @endforeach
    </table>
@endsection