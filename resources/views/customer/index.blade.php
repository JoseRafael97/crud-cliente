@extends('layouts.master')

@section('content')

    <h1>List of Customers</h1>
    <p class="lead">Customers. <a href="{{ route('customers.create') }}">Add new customer?</a></p>
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
        @foreach ($customers as $c)
            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->cpf}}</td>
                <td>{{$c->dateOfBirth}}</td>
                <td>
                    <a  href="/customers/{{ $c->id }}/edit">
                        <button class="btn btn-primary" value="Edit">Edit</button>
                    </a>
                </td>
                <td>
                    <form class="class=" btn btn-block
                    "" action="/customers/{{ $c->id }}" method="post">
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
