@extends('layouts.master')

@section('content')

    <h1>Lista de clientes</h1>
    <p class="lead">Clientes do atelie. <a href="{{ route('clientes.create') }}">Adicionar novo cliente?</a></p>
    <hr>
    {{ Session::get('message') }}


    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th></th>
            <th></th>
        </tr>

        <tbody>
        @foreach ($clientes as $c)
            <tr>
                <td>{{$c->nome}}</td>
                <td>{{$c->cpf}}</td>
                <td>{{$c->datanascimento}}</td>
                <td>
                    <a  href="/clientes/{{ $c->id }}/edit">
                        <button class="btn btn-primary" value="Editar">Editar</button>
                    </a>
                </td>
                <td>
                    <form class="class=" btn btn-block
                    "" action="/clientes/{{ $c->id }}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="btn btn-danger" type="submit" name="name" value="Remover">
                    </form>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>


@stop