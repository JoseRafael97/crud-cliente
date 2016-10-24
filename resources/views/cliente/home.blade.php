<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>clientes</title>


    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
</head>
<body>

@extends('layouts.master')

@section('content')
    <h1>Clientes</h1>

    <hr>

    <a href="{{ route('clientes.index') }}" class="btn btn-info">Lista de cliente</a>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Addd Cliente</a>



@stop
</body>
</html>
