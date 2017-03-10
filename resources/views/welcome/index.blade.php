@extends('layouts.default')


@section('content')
<!-- Banner Principal-->
<div>
  <article class="container">
    <div class="jumbotron">
      <h1>Projeto Cidade Verde</h1>
      <p>Ajudando cidadãos a tornar suas cidades ecologicamente mais sustent&aacute;veis.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
  </article>
</div>
<!-- Cidades Atendidas-->
<div style="background-color: gray; color:white; padding: 10px 0px 10px 0px;">
  <aside class="container">
    <div class="row">
      <h4 class="col-xs-4">Cidades Atendidas</h4>
      <nav class="col-xs-8">
        <ul class="nav nav-pills pull-left">
          <li role="presentation" class="active"><a href="">Salvador-BA</a></li>
          <li role="presentation" class="active"><a href="">Feira de Santana-BA</a></li>
          <li role="presentation" class="active"><a href="">São Paulo-SP</a></li>
          <li role="presentation" class="active"><a href="">Rio de Janeiro-RJ</a></li>
          <li role="presentation" class="active"><a href="">Belo Horizonte-MG</a></li>
        </ul>
      </nav>
    </div>
  </aside>
</div>
<!-- Como Funciona -->
<div style="background-color:#B0B0B0; color:#010205; padding: 20px 0px 20px 0px;">
  <aside class="container">
    <div class="row">
      <article class="col-xs-6">
        <h2>Como Funciona</h2>
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </article>
      <aside class="col-xs-6">
        <div>Video</div>
      </aside>
    </div>
  </aside>
</div>
@endsection