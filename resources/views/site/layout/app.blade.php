<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sambura Imóveis</title>
  <meta name="description" content="Venda e aluguel de imoveis em Presidente Prudente Sao Paulo. Sambura Imóveis">
  <meta name="keywords" content="sites, web, sambura, imoveis, imobiliaria, aluguel, venda, locação, rent, sale, sp, corretor, online, 19015-204">
    <!-- ======= styles ======= -->
    @include('site.layout.parts.styles')
    <!-- End styles -->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <!--<h1 class="logo"><a href="index.html">Dewi</a></h1>-->
        <a href="index.html" class="logo">
          <img src="{{ asset('images/logotipo.png') }}" alt="" class="img-fluid">
        </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Busca</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Venda</a></li>
              <li><a href="#">Locação</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#about">Empresa</a></li>
          <li class="dropdown"><a href="#"><span>Serviços</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Área do Proprietário</a></li>
              <li><a href="#">Área do Locatário</a></li>
              <li><a href="#">Área do Atendente</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
          <li>
              <a class="getstarted scrollto" href="#about">
                  <i class="bi bi-telephone-fill"></i>
                  &nbsp;
                  (18) 3226-2885 / (18) 99601-7141
              </a>
          </li>
          <li>
            <a href="https://www.unimob.com.br/" target="_" class="nav-link scrollto">
                <img src="{{ asset('images/unimob.png') }}" alt="" class="img-fluid" style="max-width: 100px">
            </a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
  </section>
  <!-- End Hero -->

  <section id="buscar" class="buscar">
    <div class="container">
        <div class="row texto mb-5">
            <div class="col-12">
                <h1>Confiança e Credibilidade desde 1988</h1>
                <p>Compra e Venda,  Locação, Lançamentos e Avaliação de Imóveis em Presidente Prudente - SP</p>
            </div>
        </div>
        <div class="row buscar-div">
          <div class="col-md-4 col-sm-12 mb-1">
              <select class="form-select" aria-label="Default select example">
                  <option selected>O que você precisa?</option>
                  <option value="1">ALUGAR</option>
                  <option value="2">COMPRAR</option>
              </select>
          </div>
          <div class="col-md-4 col-sm-12 mb-1">
              <select class="form-select" aria-label="Default select example">
                  <option selected>Qual tipo?</option>
                  <option value="1">Casa</option>
                  <option value="2">Apartamento</option>
                  <option value="3">Salão Comercial</option>
              </select>
          </div>
          <div class="col-md-2 col-sm-12 mb-1">
              <div class="d-grid gap-2">
                  <button class="btn btn-danger" type="button">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    Buscar
                  </button>
              </div>
          </div>
          <div class="col-md-2 col-sm-12 mb-1">
            <div class="input-group">
                <input class="form-control border-end-0 border rounded-pill" type="text" value="" id="" placeholder="Código">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-start-0 border rounded-pill" id="ms_n3" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
          </div>
        </div>
    </div>
  </section>

  <main id="main">
        <!-- ======= DESTAQUE DE LOCAÇÃO ======= -->
        <section id="team" class="team section-bg" style="margin-top: 50px">
            <div class="container">
                <div class="section-title">
                    <h2>Imóveis em Destaque para Locação</h2>
                    <p>ALUGAR</p>
                </div>
                <div class="row">
                    <div class="swiper team-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide col-lg-4 col-md-6">
                                <div class="member">
                                    <div class="pic">
                                        <img src="{{ asset('images/imovel/imgr-000031851.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>R$ 570.00</h4>
                                        <span title="PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE">
                                            {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...") }}
                                        </span>
                                        <div class="social">
                                            <a title="Dormitórios"><i class="fa fa-bed" aria-hidden="true"></i> 3</a>   |
                                            <a title="Banheiros"<i class="fa fa-shower" aria-hidden="true"></i> 2</a>   |
                                            <a title="Vagas"><i class="fa fa-car" aria-hidden="true"></i> 1</a>         |
                                            <a title="Suítes"><i class="fa fa-bath" aria-hidden="true"></i> 4</a>       |
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-4 col-md-6">
                                <div class="member">
                                    <div class="pic">
                                        <img src="{{ asset('images/imovel/imgr-000031851.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>R$ 570.00</h4>
                                        <span title="PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE">
                                            {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...") }}
                                        </span>
                                        <div class="social">
                                            <a title="Dormitórios"><i class="fa fa-bed" aria-hidden="true"></i> 3</a>   |
                                            <a title="Banheiros"<i class="fa fa-shower" aria-hidden="true"></i> 2</a>   |
                                            <a title="Vagas"><i class="fa fa-car" aria-hidden="true"></i> 1</a>         |
                                            <a title="Suítes"><i class="fa fa-bath" aria-hidden="true"></i> 4</a>       |
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-4 col-md-6">
                                <div class="member">
                                    <div class="pic">
                                        <img src="{{ asset('images/imovel/imgr-000031851.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                    <h4>R$ 570.00</h4>
                                    <span title="PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE">
                                        {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...") }}
                                    </span>
                                        <div class="social">
                                            <a><i class="fa fa-bed" aria-hidden="true"></i> 3</a>           |
                                            <a title="Dormitórios"><i class="fa fa-bed" aria-hidden="true"></i> 3</a>   |
                                            <a title="Banheiros"<i class="fa fa-shower" aria-hidden="true"></i> 2</a>   |
                                            <a title="Vagas"><i class="fa fa-car" aria-hidden="true"></i> 1</a>         |
                                            <a title="Suítes"><i class="fa fa-bath" aria-hidden="true"></i> 4</a>       |
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DESTAQUE DE LOCAÇÃO -->

        <!-- ======= DESTAQUE DE VENDA ======= -->
        <section id="team" class="team section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Imóveis em Destaque para Venda</h2>
                    <p>COMPRAR</p>
                </div>
                <div class="row">
                    <div class="swiper team-swiper">
                        <div class="swiper-wrapper pb-3">
                            <div class="swiper-slide col-lg-4 col-md-6">
                                <div class="member">
                                    <div class="pic">
                                        <img src="{{ asset('images/imovel/imgr-000031851.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>R$ 570.00</h4>
                                        <span title="PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE">
                                            {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...") }}
                                        </span>
                                        <div class="social">
                                            <a title="Dormitórios"><i class="fa fa-bed" aria-hidden="true"></i> 3</a>   |
                                            <a title="Banheiros"<i class="fa fa-shower" aria-hidden="true"></i> 2</a>   |
                                            <a title="Vagas"><i class="fa fa-car" aria-hidden="true"></i> 1</a>         |
                                            <a title="Suítes"><i class="fa fa-bath" aria-hidden="true"></i> 4</a>       |
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-4 col-md-6">
                                <div class="member">
                                    <div class="pic">
                                        <img src="{{ asset('images/imovel/imgr-000031851.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>R$ 570.00</h4>
                                        <span title="PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE">
                                            {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...") }}
                                        </span>
                                        <div class="social">
                                            <a title="Dormitórios"><i class="fa fa-bed" aria-hidden="true"></i> 3</a>   |
                                            <a title="Banheiros"<i class="fa fa-shower" aria-hidden="true"></i> 2</a>   |
                                            <a title="Vagas"><i class="fa fa-car" aria-hidden="true"></i> 1</a>         |
                                            <a title="Suítes"><i class="fa fa-bath" aria-hidden="true"></i> 4</a>       |
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-4 col-md-6">
                                <div class="member">
                                    <div class="pic">
                                        <img src="{{ asset('images/imovel/imgr-000031851.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                    <h4>R$ 570.00</h4>
                                    <span title="PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE">
                                        {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...") }}
                                    </span>
                                        <div class="social">
                                            <a><i class="fa fa-bed" aria-hidden="true"></i> 3</a>           |
                                            <a title="Dormitórios"><i class="fa fa-bed" aria-hidden="true"></i> 3</a>   |
                                            <a title="Banheiros"<i class="fa fa-shower" aria-hidden="true"></i> 2</a>   |
                                            <a title="Vagas"><i class="fa fa-car" aria-hidden="true"></i> 1</a>         |
                                            <a title="Suítes"><i class="fa fa-bath" aria-hidden="true"></i> 4</a>       |
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-4 col-md-6">
                                <div class="member">
                                    <div class="pic">
                                        <img src="{{ asset('images/imovel/imgr-000031851.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                    <h4>R$ 570.00</h4>
                                    <span title="PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE">
                                        {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...") }}
                                    </span>
                                        <div class="social">
                                            <a><i class="fa fa-bed" aria-hidden="true"></i> 3</a>           |
                                            <a title="Dormitórios"><i class="fa fa-bed" aria-hidden="true"></i> 3</a>   |
                                            <a title="Banheiros"<i class="fa fa-shower" aria-hidden="true"></i> 2</a>   |
                                            <a title="Vagas"><i class="fa fa-car" aria-hidden="true"></i> 1</a>         |
                                            <a title="Suítes"><i class="fa fa-bath" aria-hidden="true"></i> 4</a>       |
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-4 col-md-6">
                                <div class="member">
                                    <div class="pic">
                                        <img src="{{ asset('images/imovel/imgr-000031851.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                    <h4>R$ 570.00</h4>
                                    <span title="PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE">
                                        {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...") }}
                                    </span>
                                        <div class="social">
                                            <a><i class="fa fa-bed" aria-hidden="true"></i> 3</a>           |
                                            <a title="Dormitórios"><i class="fa fa-bed" aria-hidden="true"></i> 3</a>   |
                                            <a title="Banheiros"<i class="fa fa-shower" aria-hidden="true"></i> 2</a>   |
                                            <a title="Vagas"><i class="fa fa-car" aria-hidden="true"></i> 1</a>         |
                                            <a title="Suítes"><i class="fa fa-bath" aria-hidden="true"></i> 4</a>       |
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DESTAQUE DE VENDA -->

        <!-- ======= ABOUT ======= -->
        <section id="cta" class="cta mb-5">
            <div class="container">
                <div class="text-center">
                    <h3>A Samburá Imóveis é reconhecida por ser administradora com talento e sensibilidade para atender e orientar os seus clientes</h3>
                    <p>
                        Antenada a evolução do mercado, a Samburá Imóveis investe em tecnologia,
                        inteligência e inovação, além de alta capacitação de seus colaboradores,
                        para oferecer sempre excelência no desenvolvimento dos negócios.
                    </p>
                    <a class="cta-btn scrollto" href="#">Conheça!</a>
                </div>
            </div>
        </section>
        <!-- END ABOUT -->
  </main>
  <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('site.layout.parts.footer')
    <!-- End Footer -->

    <!-- ======= Scripts ======= -->
    @include('site.layout.parts.scripts')
    <!-- ======= End Scripts ======= -->

</body>

</html>
