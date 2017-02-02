<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>customer</title>


    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
</head>
<body>

@extends('layouts.master')

@section('content')
    <h1>Customer</h1>

    <hr>

    <a href="{{ route('customers.index') }}" class="btn btn-info">Lista de cliente</a>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">Addd Cliente</a>



@stop
</body>
</html>
