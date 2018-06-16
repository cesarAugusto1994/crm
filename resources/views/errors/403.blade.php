@extends('adminlte::page')

@section('title', 'CRM')

@section('content_header')
    <h1>Erro</h1>
@stop

@section('content')

<div class="error-page">
  <h2 class="headline text-red">301</h2>

  <div class="error-content">
    <h3><i class="fa fa-warning text-red"></i> {{ $exception->getMessage() }}</h3>

    <p>
      <a href="{{ url('/') }}">voltar a homepage</a>
    </p>

  </div>
</div>

@stop
