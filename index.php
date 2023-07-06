<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
    </style>
</head>
<body class="ff-ubuntu">

<!-- Navbar -->

<nav class="navbar navbar-expand-md bg-black navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><h1><img class="d-block" src="./assets/logo-powerpc.png" alt="Logo da PowerPc">
            </h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Menu de navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Novidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promoção</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 rounded-0" type="search" placeholder="Digite o produto"
                       aria-label="Buscar">
                <button class="btn btn-outline-light rounded-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<!-- Carrossel -->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-fluid d-md-none" src="./assets/Mobile/banner1-mobile.jpg"
                 alt="Homem com camisa e plano de fundo azul sorrindo">
            <img class="img-fluid d-none d-md-block d-xxl-none" src="./assets/Tablet/banner1-tablet.jpg"
                 alt="Homem com camisa e plano de fundo azul sorrindo">
            <img class="img-fluid d-none d-xxl-block" src="./assets/Desktop/banner1-desktop.jpg"
                 alt="Homem com camisa e plano de fundo azul sorrindo">
        </div>
        <div class="carousel-item">
            <img class="img-fluid d-md-none" src="./assets/Mobile/banner2-mobile.jpg"
                 alt="Mulher com cabelo, roupa e plano de fundo rosa segurando controle de vídeo game">
            <img class="img-fluid d-none d-md-block d-xxl-none" src="./assets/Tablet/banner2-tablet.jpg"
                 alt="Mulher com cabelo, roupa e plano de fundo rosa segurando controle de vídeo game">
            <img class="img-fluid d-none d-xxl-block" src="./assets/Desktop/banner2-desktop.jpg"
                 alt="Mulher com cabelo, roupa e plano de fundo rosa segurando controle de vídeo game">
            <div class="carousel-caption h-50 d-flex flex-column justify-content-center">
                <h5 class="fs-1 mt-0">PERIFÉRICOS DE PONTA</h5>
                <p class="fs-5 mb-0">As melhores marcas do mercado.</p>
            </div>
        </div>
        <div class="carousel-item">

            <img class="img-fluid d-md-none" src="./assets/Mobile/banner3-mobile.jpg"
                 alt="Homem em plano de fundo laranja jogando vídeo game">
            <img class="img-fluid d-none d-md-block d-xxl-none" src="./assets/Tablet/banner3-tablet.jpg"
                 alt="Homem em plano de fundo laranja jogando vídeo game">
            <img class="img-fluid d-none d-xxl-block" src="./assets/Desktop/banner3-desktop.jpg"
                 alt="Homem em plano de fundo laranja jogando vídeo game">
            <div class="carousel-caption h-50 d-flex flex-column justify-content-center">
                <h5 class="fs-1 mt-0">PERIFÉRICOS DE PONTA</h5>
                <p class="fs-5 mb-0">Qualidade e desempenho pelo preço justo.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>

<!-- Cards de Categoria -->

<h2 class="text-center my-4 my-md-5 container">Busque por categoria:</h2>

<div class="container row mx-auto g-4">

    <div class="col-6 col-md-4 col-xxl-2">
        <div class="card">
            <img class="d-md-none" src="./assets/Mobile/categorias/categoria1.png" alt="Placa-mãe">
            <img class="d-none d-md-block d-xxl-none" src="./assets/Tablet/categorias/categoria1.png" alt="Placa-mãe">
            <img class="d-none d-xxl-block" src="./assets/Desktop/categorias/categoria1.png" alt="Placa-mãe">
            <div class="card-header bg-black">
                <p class="text-center text-light m-0">Placa-mãe</p>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xxl-2">
        <div class="card">
            <img class="d-md-none" src="./assets/Mobile/categorias/categoria2.png" alt="Processador">
            <img class="d-none d-md-block d-xxl-none" src="./assets/Tablet/categorias/categoria2.png" alt="Processador">
            <img class="d-none d-xxl-block" src="./assets/Desktop/categorias/categoria2.png" alt="Processador">
            <div class="card-header bg-black">
                <p class="text-center text-light m-0">Processador</p>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xxl-2">
        <div class="card">
            <img class="d-md-none" src="./assets/Mobile/categorias/categoria3.png" alt="Placa de vídeo">
            <img class="d-none d-md-block d-xxl-none" src="./assets/Tablet/categorias/categoria3.png" alt="Placa de vídeo">
            <img class="d-none d-xxl-block" src="./assets/Desktop/categorias/categoria3.png" alt="Placa de vídeo">
            <div class="card-header bg-black">
                <p class="text-center text-light m-0">Placa de vídeo</p>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xxl-2">
        <div class="card">
            <img class="d-md-none" src="./assets/Mobile/categorias/categoria4.png" alt="Memória RAM">
            <img class="d-none d-md-block d-xxl-none" src="./assets/Tablet/categorias/categoria4.png" alt="Memória RAM">
            <img class="d-none d-xxl-block" src="./assets/Desktop/categorias/categoria4.png" alt="Memória RAM">
            <div class="card-header bg-black">
                <p class="text-center text-light m-0">Memória RAM</p>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xxl-2">
        <div class="card">
            <img class="d-md-none" src="./assets/Mobile/categorias/categoria5.png" alt="Fonte">
            <img class="d-none d-md-block d-xxl-none" src="./assets/Tablet/categorias/categoria5.png" alt="Fonte">
            <img class="d-none d-xxl-block" src="./assets/Desktop/categorias/categoria5.png" alt="Fonte">
            <div class="card-header bg-black">
                <p class="text-center text-light m-0">Fonte</p>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xxl-2">
        <div class="card">
            <img class="d-md-none" src="./assets/Mobile/categorias/categoria6.png" alt="Gabinete">
            <img class="d-none d-md-block d-xxl-none" src="./assets/Tablet/categorias/categoria6.png" alt="Gabinete">
            <img class="d-none d-xxl-block" src="./assets/Desktop/categorias/categoria6.png" alt="Gabinete">
            <div class="card-header bg-black">
                <p class="text-center text-light m-0">Gabinete</p>
            </div>
        </div>
    </div>

</div>

<!-- Cards de Produtos -->

<h2 class="text-center my-4 my-md-5 container">Produtos que estão bombando!</h2>

<div class="container row mx-auto g-4">

    <div class="col-12 col-md-6 col-xxl-4">
        <div class="card rounded-0 border-secondary-subtle">
            <img class="d-md-none" src="./assets/Mobile/produtos/produto1.png" alt="Placa de Video RTX 3060 TI">
            <img class="d-none d-md-block d-xxl-none" src="./assets/Tablet/produtos/produto1.png" alt="Placa de Video RTX 3060 TI">
            <img class="d-none d-xxl-block" src="./assets/Desktop/produtos/produto1.png" alt="Placa de Video RTX 3060 TI">
            <div class="card-body bg-secondary-subtle">
                <h5 class="card-title fw-bold">Placa de Video RTX 3060 TI</h5>
                <p class="card-text">Dual Fan PNY NVIDIA Geforce, 8 GB GDDR6, LHR, DLSS, Ray Tracing</p>
                <p class="fw-bold">R$ 2.199,99</p>
                <a href="#" class="btn btn-wine rounded-0">Ver mais</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-xxl-4">
        <div class="card rounded-0 border-secondary-subtle">
            <img class="d-md-none" src="./assets/Mobile/produtos/produto2.png" alt="Processador AMD Ryzen 7 5700X">
            <img class="d-none d-md-block d-xxl-none" src="./assets/Tablet/produtos/produto2.png" alt="Processador AMD Ryzen 7 5700X">
            <img class="d-none d-xxl-block" src="./assets/Desktop/produtos/produto2.png" alt="Processador AMD Ryzen 7 5700X">
            <div class="card-body bg-secondary-subtle">
                <h5 class="card-title fw-bold">Processador AMD Ryzen 7 5700X</h5>
                <p class="card-text">3.4GHz (4.6GHz Max Turbo), Cache 36MB, AM4, Sem Vídeo</p>
                <p class="fw-bold">R$ 1.199,99</p>
                <a href="#" class="btn btn-wine rounded-0">Ver mais</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-xxl-4">
        <div class="card rounded-0 border-secondary-subtle">
            <img class="d-md-none" src="./assets/Mobile/produtos/produto3.png" alt="Placa Mãe Asus TUF GAMING A520M-PLUS II">
            <img class="d-none d-md-block d-xxl-none" src="./assets/Tablet/produtos/produto3.png" alt="Placa Mãe Asus TUF GAMING A520M-PLUS II">
            <img class="d-none d-xxl-block" src="./assets/Desktop/produtos/produto3.png" alt="Placa Mãe Asus TUF GAMING A520M-PLUS II">
            <div class="card-body bg-secondary-subtle">
                <h5 class="card-title fw-bold">Placa Mãe Asus TUF GAMING A520M-PLUS II</h5>
                <p class="card-text">AMD AM4, mATX, DDR4</p>
                <p class="fw-bold">R$ 749,99</p>
                <a href="#" class="btn btn-wine rounded-0">Ver mais</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-xxl-4">
        <div class="card rounded-0 border-secondary-subtle">
            <img class="d-md-none" src="./assets/Mobile/produtos/produto4.png" alt="Memória Kingston Fury Beast 16GB">
            <img class="d-none d-md-block d-xxl-none" src="./assets/Tablet/produtos/produto4.png" alt="Memória Kingston Fury Beast 16GB">
            <img class="d-none d-xxl-block" src="./assets/Desktop/produtos/produto4.png" alt="Memória Kingston Fury Beast 16GB">
            <div class="card-body bg-secondary-subtle">
                <h5 class="card-title fw-bold">Memória Kingston Fury Beast 16GB</h5>
                <p class="card-text">RGB, 3200MHz, DDR4, CL16, Preto</p>
                <p class="fw-bold">R$ 289,99</p>
                <a href="#" class="btn btn-wine rounded-0">Ver mais</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-xxl-4">
        <div class="card rounded-0 border-secondary-subtle">
            <img class="d-md-none" src="./assets/Mobile/produtos/produto5.png" alt="Fonte MSI MPG A750GF 750W">
            <img class="d-none d-md-block d-xxl-none" src="./assets/Tablet/produtos/produto5.png" alt="Fonte MSI MPG A750GF 750W">
            <img class="d-none d-xxl-block" src="./assets/Desktop/produtos/produto5.png" alt="Fonte MSI MPG A750GF 750W">
            <div class="card-body bg-secondary-subtle">
                <h5 class="card-title fw-bold">Fonte MSI MPG A750GF 750W</h5>
                <p class="card-text">80 Plus Gold, Modular, PFC Ativo, Bivolt, Preto</p>
                <p class="fw-bold">R$ 549,99</p>
                <a href="#" class="btn btn-wine rounded-0">Ver mais</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-xxl-4">
        <div class="card rounded-0 border-secondary-subtle">
            <img class="d-md-none" src="./assets/Mobile/produtos/produto6.png" alt="SSD 256 GB Husky Gaming">
            <img class="d-none d-md-block d-xxl-none" src="./assets/Tablet/produtos/produto6.png" alt="SSD 256 GB Husky Gaming">
            <img class="d-none d-xxl-block" src="./assets/Desktop/produtos/produto6.png" alt="SSD 256 GB Husky Gaming">
            <div class="card-body bg-secondary-subtle">
                <h5 class="card-title fw-bold">SSD 256 GB Husky Gaming</h5>
                <p class="card-text">M.2 NVMe, Leitura: 1800MB/s e Gravação: 1300MB/s</p>
                <p class="fw-bold">R$ 109,99</p>
                <a href="#" class="btn btn-wine rounded-0">Ver mais</a>
            </div>
        </div>
    </div>

</div>

<!-- Banner -->

<section class="py-4 py-xl-5 bg-black mt-5">

    <h2 class="text-center text-light mb-4 mb-xl-5">Conheça todos os nossos benefícios</h2>

    <div class="d-flex flex-column flex-lg-row align-items-center gap-3 gap-xl-5 justify-content-center">
        <div class="w-beneficios d-flex align-items-center px-3">
            <div><i class="bi bi-x-diamond fs-1 text-info"></i></div>
            <div class="ms-3 h-beneficios">
                <div class="mb-1 text-info">PAGUE PELO PIX</div>
                <div class="fs-7 text-light">Ganhe 5% OFF em todos os pagamentos realizados via PIX</div>
            </div>
        </div>
        <div class="w-beneficios d-flex align-items-center px-3">
            <div><i class="bi bi-cash fs-1 text-info"></i></div>
            <div class="ms-3 h-beneficios">
                <div class="mb-1 text-info">CASHBACK PARA MEMBROS</div>
                <div class="fs-7 text-light">Assine o programa de membros e receba até 10% de cashback</div>
            </div>
        </div>
        <div class="w-beneficios d-flex align-items-center px-3">
            <div><i class="bi bi-truck fs-1 text-info"></i></div>
            <div class="ms-3 h-beneficios">
                <div class="mb-1 text-info">FRETE GRÁTIS</div>
                <div class="fs-7 text-light">Economize nos seus pedidos com frete grátis para todo o Brasil</div>
            </div>
        </div>
    </div>

</section>

<!-- Formulário de E-mail -->

<div class="container d-flex justify-content-center">
    <form class="border border-secondary border-2 border-black my-5 mx-3 m-md-4 m-xl-5 p-3 text-center w-max-1">
        <h5 class="fs-6">Quer receber nossas novidades, promoções exclusivas e 10% OFF na primeira compra? Cadastre-se!</h5>
        <div class="input-group my-3">
            <input type="email" class="form-control border-secondary rounded-0" placeholder="Digite seu e-mail"
                   aria-label="Digite seu e-mail" aria-describedby="button-addon2"/>
            <button type="button" class="btn btn-wine rounded-0" id="button-addon2">Enviar</button>
        </div>
    </form>
</div>

<!-- Footer -->

<footer class="text-center bg-black">
    <p class="py-4 text-light mb-0">2023 <i class="bi bi-c-circle"></i> Desenvolvido por Júlio Simões | Projeto fictício sem
        fins comerciais.</p>
</footer>

<!-- Bootstrap script -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

</body>
</html>