@extends('template.master')

@section('titulo', 'katia')

@section('conteudo')
<h1>Pessoas Cadastradas</h1>

<a class="btn btn-primary" href="/pessoas/create">Cadastrar Nova</a>

<hr>


<table class="table table-danger">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
@foreach($pessoas as $p)

    <tr>
        <td> {{ $p->nome }}</td>
        <td>{{ $p->telefone }}</td>
        <td>{{ $p->email }}</td>
        <td>
        <a href="/pessoas/{{$p->id}}/edit">Editar</a>
        <form action="/pessoas/{{$p->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
        </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection