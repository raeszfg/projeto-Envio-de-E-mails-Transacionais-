<!-- Sidebar de Gerenciamento de Conta do Usuário -->
<div class="card border-0 shadow-sm mb-4 h-100">
    <div class="card-body">
        
        <!-- Perfil Resumido -->
        <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
            <!-- Adicionado 'flex-shrink-0' para o círculo não amassar -->
            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3 flex-shrink-0" style="width: 48px; height: 48px; font-size: 20px;">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="overflow-hidden">
                <h6 class="fw-bold text-dark mb-0 text-truncate">{{ session('nome_usuario', 'Visitante') }}</h6>
                <span class="text-muted small text-truncate d-block">{{ session('email_usuario') }}</span>
            </div>
        </div>

        <!-- Seção: Minha Conta -->
        <h6 class="text-uppercase text-muted fw-bold fs-7 mb-2" style="font-size: 11px; letter-spacing: 0.5px;">Minha Conta</h6>
        <ul class="list-unstyled mb-4">
            <li class="mb-2"><a href="#" class="text-decoration-none text-dark small d-block py-1"><i class="fa-solid fa-user-circle me-2"></i> Perfil</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-dark small d-block py-1"><i class="fa-solid fa-lock me-2"></i> Segurança</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-dark small d-block py-1"><i class="fa-solid fa-credit-card me-2"></i> Endereços e Cartões</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-dark small d-block py-1"><i class="fa-solid fa-bell me-2"></i> Notificações</a></li>
        </ul>

        <!-- Seção: Compras -->
        <h6 class="text-uppercase text-muted fw-bold fs-7 mb-2" style="font-size: 11px; letter-spacing: 0.5px;">Compras</h6>
        <ul class="list-unstyled mb-4">
            <li class="mb-2"><a href="#" class="text-decoration-none text-dark small d-block py-1"><i class="fa-solid fa-cart-shopping me-2"></i> Compras</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-dark small d-block py-1"><i class="fa-solid fa-circle-question me-2"></i> Perguntas</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-dark small d-block py-1"><i class="fa-solid fa-tag me-2"></i> Favoritos</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-dark small d-block py-1"><i class="fa-solid fa-rotate-right me-2"></i> Histórico / Devolver</a></li>
        </ul>

        <!-- Botão de Logout -->
        <div class="border-top pt-3">
            <a href="{{ route('logout') }}" class="text-decoration-none text-danger small d-block py-1 fw-bold">
                <i class="fa-solid fa-right-from-bracket me-2"></i> Logout
            </a>
        </div>

    </div>
</div>