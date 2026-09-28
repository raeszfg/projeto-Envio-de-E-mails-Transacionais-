@extends('layout.main')

@section('content')
<!-- Estilos inline específicos para fixar a sidebar à esquerda da tela -->
<style>
    @media (min-width: 992px) {
        .fixed-sidebar-container {
            position: fixed;
            top: 20px; /* Distância do topo da tela */
            width: 270px; /* Largura padrão para 3 colunas do Bootstrap */
            height: calc(100vh - 40px);
            z-index: 1000;
        }
        
        /* Empurra o conteúdo principal para a direita para não ficar embaixo da sidebar fixa */
        .main-content-wrapper {
            margin-left: 292px; /* Largura da sidebar + espaçamento */
            width: calc(100% - 292px);
        }
    }
</style>

<div class="container my-4 position-relative">
    
    <!-- Sidebar Fixa Esquerda -->
    <div class="fixed-sidebar-container d-none d-lg-block">
        @include('componentes.sidebar') 
    </div>

    <!-- Wrapper do Conteúdo Principal -->
    <div class="main-content-wrapper">

        <!-- Banner Principal -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="p-5 text-white rounded bg-primary shadow-sm text-center" style="background: linear-gradient(135deg, #3483fa, #2968c8) !important;">
                    <h1 class="display-6 fw-bold">Frete grátis a partir de R$ 79</h1>
                    <p class="lead mb-0">Milhares de produtos com entrega rápida para todo o país.</p>
                </div>
            </div>
        </div>

        <!-- Vitrine de Produtos -->
        <h2 class="h4 mb-3 text-dark fw-normal">Baseado na sua última visita</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-3 g-3">
            <!-- Produto 1 -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm product-card">
                    <div class="bg-light d-flex align-items-center justify-content-center text-muted" style="height: 200px; border-bottom: 1px solid #eee;">
                        Foto do Produto
                    </div>
                    <div class="card-body d-flex flex-column">
                        <span class="fs-4 fw-light text-dark mb-1">R$ 1.299</span>
                        <span class="text-success fw-bold small mb-2">Frete grátis</span>
                        <p class="card-text text-muted small text-truncate" style="-webkit-line-clamp: 2; display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden;">
                            Smartphone XYZ 128gb Tela 6.5" Câmera Tripla
                        </p>
                    </div>
                </div>
            </div>

            <!-- Produto 2 -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm product-card">
                    <div class="bg-light d-flex align-items-center justify-content-center text-muted" style="height: 200px; border-bottom: 1px solid #eee;">
                        Foto do Produto
                    </div>
                    <div class="card-body d-flex flex-column">
                        <span class="fs-4 fw-light text-dark mb-1">R$ 249</span>
                        <span class="text-success fw-bold small mb-2">Frete grátis</span>
                        <p class="card-text text-muted small">
                            Tênis Esportivo Corrida Confortável Masculino/Feminino
                        </p>
                    </div>
                </div>
            </div>

            <!-- Produto 3 -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm product-card">
                    <div class="bg-light d-flex align-items-center justify-content-center text-muted" style="height: 200px; border-bottom: 1px solid #eee;">
                        Foto do Produto
                    </div>
                    <div class="card-body d-flex flex-column">
                        <span class="fs-4 fw-light text-dark mb-1">R$ 89,90</span>
                        <span class="text-success fw-bold small mb-2">Frete grátis</span>
                        <p class="card-text text-muted small">
                            Fone de Ouvido Bluetooth Sem Fio Headset Gamer
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection