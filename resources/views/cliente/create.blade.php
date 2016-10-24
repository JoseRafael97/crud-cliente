@extends('layouts.master')

@section('content')

    <h1>Adicionar novo Cliente</h1>
    <p class="lead">Adiciona a lista de clientes.</p>
    <hr>

    <!-- @if (count($errors) > 0)
        <ul>
          @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
    @endforeach
                </ul>
              @endif -->

    <form class="" action="/clientes" method="post">
        <input class="form-control" type="text" name="nome" value="" placeholder="Nome">
        {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}

        <input class="form-control" name="cpf" rows="8" cols="40" placeholder="CPF">
        {{ ($errors->has('cpf')) ? $errors->first('cpf') : '' }}

        <input class="form-control" name="datanascimento" rows="8" cols="40" placeholder="Data de nascimento">
        {{ ($errors->has('datanascimento')) ? $errors->first('datanascimento') : '' }}

        <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="btn btn-primary " type="submit" name="name" value="Cadastrar">
    </form>
    {{ Session::get('message') }}

@stop