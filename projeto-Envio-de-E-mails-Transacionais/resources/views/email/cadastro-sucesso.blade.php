<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body style="background-color: #f8f9fa; font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; margin: 0; padding: 40px 10px;">

    <div style="max-width: 600px; margin: 0 auto;">
        <!-- Card Bootstrap -->
        <div style="background-color: #ffffff; border: 1px solid #dee2e6; border-radius: 0.375rem; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); overflow: hidden;">
            
            <!-- Header (bg-primary text-white) -->
            <div style="background-color: #0d6efd; color: #ffffff; padding: 1.5rem; text-align: center;">
                <h3 style="margin: 0; font-size: 1.5rem; font-weight: 500;">
                    Bem-vindo(a)!
                </h3>
            </div>

            <!-- Card Body -->
            <div style="padding: 2rem;">
                <h4 style="color: #212529; font-size: 1.25rem; margin-top: 0; margin-bottom: 1rem;">
                    Olá, {{ $nomeUsuario }}! 👋
                </h4>
                
                <p style="color: #495057; font-size: 1rem; line-height: 1.5; margin-bottom: 1rem;">
                    Seu cadastro foi realizado com sucesso em nosso sistema.
                </p>

                <!-- Alert Bootstrap (alert-success) -->
                <div style="background-color: #d1e7dd; border: 1px solid #badbcc; color: #0f5132; padding: 1rem; border-radius: 0.375rem; margin-bottom: 1.5rem; font-size: 0.9rem;">
                    <strong>Conta ativa:</strong> Você já pode acessar todos os recursos da plataforma.
                </div>

                <!-- Botão Bootstrap (btn btn-primary) -->
                <div style="text-align: center; margin-top: 1.5rem; margin-bottom: 1rem;">
                    <a href="{{ route('login') }}" target="_blank" style="background-color: #0d6efd; border: 1px solid #0d6efd; color: #ffffff; padding: 0.5rem 1rem; font-size: 1rem; border-radius: 0.375rem; text-decoration: none; display: inline-block; font-weight: 400;">
                        Acessar minha Conta
                    </a>
                </div>
            </div>

            <!-- Card Footer (bg-light text-muted) -->
            <div style="background-color: #f8f9fa; border-top: 1px solid #dee2e6; padding: 1rem; text-align: center;">
                <small style="color: #6c757d; font-size: 0.875em;">
                    &copy; {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.
                </small>
            </div>

        </div>
    </div>

</body>
</html>