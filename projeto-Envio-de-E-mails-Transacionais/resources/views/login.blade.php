<!-- Não funcional com o BD, apenas visual -->
@extends('layout.main')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-4 text-dark">Login</h2>
        
        <form action="{{ route('login.autenticar') }}" method="POST">
    @csrf
    
    @if ($errors->any())
        <div class="alert alert-danger p-2 small">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control @error('senha') is-invalid @enderror" id="senha" name="senha">
    </div>
    <button type="submit" class="btn btn-primary w-100">Entrar</button>
    <p class="mt-3 text-center">Não tem uma conta? <a href="{{ route('cadastro') }}">Clique Aqui</a></p>
</form>
    </div>
</div>
@endsection