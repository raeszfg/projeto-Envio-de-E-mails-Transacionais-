<!-- Não funcional com o BD, apenas visual -->
@extends('layout.main')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-4 text-dark">Login</h2>
        
        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <br></br>
            <p>Não tem uma conta? <a href="cadastro">Clique Aqui</a></p>
        </form>
    </div>
</div>
@endsection