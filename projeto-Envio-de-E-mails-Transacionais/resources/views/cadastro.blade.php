@extends('layout.main')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-4 text-dark">Cadastro</h2>
        <!-- Colocar post -->
        <form action="{{ route('cadastro.salvar') }}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="nome_usuario" class="form-label">Nome de Usuário</label>
        <input type="text" class="form-control @error('nome_usuario') is-invalid @enderror" id="nome_usuario" name="nome_usuario" value="{{ old('nome_usuario') }}">
        @error('nome_usuario')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control @error('senha') is-invalid @enderror" id="senha" name="senha">
        @error('senha')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
    <br></br>
            <p class="mt-3 text-center">Já tem uma conta? <a href="login">Clique Aqui</a></p>
</form>
    </div>
</div>
@endsection