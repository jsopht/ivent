@extends('layouts.app')

@section('content')
<div class="contianer-fluid">
<div class="col">
  <h3 class="text-center mt-5">Crie sua conta grátis!</h2>
  <div class="card auth-card mt-4">
    <div class="card-body">
      <div class="card-title text-center">
        <img src="/img/brand.png" class="brand-img mb-3">
      </div>
      <form>
        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" placeholder="Seu nome e sobrenome">
        </div>

        <div class="form-group">
          <label>Organizão</label>
          <input type="text" class="form-control" placeholder="Nome da organização">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="seuemail@empresa.com.br">
          {{-- <small class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <div class="form-group mt-4">
          <label >Senha</label>
          <a href="#" class="btn btn-link btn-sm float-right pt-0 pr-0"></a>
          <input type="password" class="form-control" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-4"><b>Cria minha conta grátis</b></button>
      </form>
      <div class="card-footer text-center">
        Já tem uma conta? <a href="/login"><b>Faça login!</b></a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
