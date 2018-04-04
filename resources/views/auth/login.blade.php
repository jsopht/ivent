@extends('layouts.app')

@section('content')
<div class="contianer">
  <div class="col">
    <h3 class="text-center mt-5">Faça login na sua conta</h2>
    <div class="card auth-card mt-4">
        <div class="card-title text-center">
          <img src="/img/brand.png" class="brand-img mb-3">
        </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="seuemail@empresa.com.br">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group mt-4">
            <label >Senha</label>
            <a href="/password/reset" class="btn btn-link btn-sm float-right pt-0 pr-0"><b class="text-muted">Esqueceu sua senha?</b></a>
            <input type="password" class="form-control" placeholder="Senha">
          </div>
          <button type="submit" class="btn btn-primary btn-block mt-4"><b>Entrar</b></button>
        </form>
        <div class="card-footer text-center">
          Ainda não tem uma conta? <a href="/register"><b>Crie sua conta grátis!</b></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
