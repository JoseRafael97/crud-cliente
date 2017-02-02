@extends('layouts.master')

@section('content')


    <h2>Editar Cliente</h2>
    <form class="" action="/clientes/{{ $cliente->id }}" method="post">
        <input class="form-control" type="text" name="nome" value="{{ $cliente->nome }}" placeholder="Nome">
        {{ ($errors->has('title')) ? $errors->first('nome') : '' }}

        <input class="form-control" name="cpf" rows="8" cols="40" value="{{ $cliente->cpf }}" placeholder="CPF">
        {{ ($errors->has('cpf')) ? $errors->first('cpf') : '' }}

        <input class="form-control" name="datanascimento" rows="8" cols="40" value="{{ $cliente->datanascimento }}" placeholder="Data de nascimento">
        {{ ($errors->has('datanascimento')) ? $errors->first('datanascimento') : '' }}

        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="btn btn-primary " type="submit" name="name" value="Editar">
    </form>
    @stop