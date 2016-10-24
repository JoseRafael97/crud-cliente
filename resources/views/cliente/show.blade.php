<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>clientes</title>


    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
</head>
<body>

@extends('layouts.master')

@section('content')
    <h1>Lista de Clientes</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <td>Nome</td>
            <td>CPF</td>
            <td>Data Nascimento</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($clientes as $c)
            <tr>
                <td>{{$c->nome}}</td>
                <td>{{$c->cpf}}</td>
                <td>{{$c->datanascimento}}</td>


            </tr>
        @endforeach
        </tbody>
    </table>
@stop
</html>
