@extends('layout.main')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-4 text-dark">Cadastro</h2>
        <!-- Colocar post -->
        <form action="home-page"  >
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>

            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
            <br></br>
            <p>Já tem uma conta? <a href="login">Clique Aqui</a></p>
        </form>
    </div>
</div>
@endsection