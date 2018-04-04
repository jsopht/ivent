@extends('layouts.app')

@section('content')
<div class="contianer">
  <div class="col">
    <h3 class="text-center mt-5">Resete sua senha</h2>
    <div class="card auth-card mt-4">
      <div class="card-body">
        <div class="card-title text-center">
          <img src="/img/brand.png" class="brand-img mb-3">
        </div>
        <form>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="seuemail@empresa.com.br">
            {{-- <small class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>
          <button type="submit" class="btn btn-primary btn-block mt-4"><b>Enviar instruções de recuperação</b></button>
        </form>
        <div class="card-footer text-center">
          Ainda não tem uma conta? <a href="/register"><b>Crie sua conta grátis</b><br></a> ou <a href="/login"><b>Faça login</b></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
