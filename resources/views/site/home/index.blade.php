@extends('site.layout.app')

@section('hero-banner')
<section id="hero">
</section>
<div class="unimob">
    <a href="https://www.unimob.com.br/" target="_" class="" title="Unimob">
        <img src="{{ asset('images/unimob_.png') }}" class="img-fluid" alt="">
    </a>
</div>
@endsection

@section('busca')
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
@endsection

@section('main')
<!-- ======= DESTAQUE DE VENDA ======= -->
<section id="team" class="team section-bg" style="margin-top: 50px;">
    <div class="container">
        <div class="section-title">
            <h2>Imóveis em Destaque para Alugar</h2>
            <p>ALUGAR</p>
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
                                <h4 style="font-size: 11px">
                                    PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE
                                </h4>
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
                                <h4 style="font-size: 11px">
                                    PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE
                                </h4>
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
                            <h4 style="font-size: 11px">
                                PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE
                            </h4>
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
                            <h4 style="font-size: 11px">
                                PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE
                            </h4>
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
                            <h4 style="font-size: 11px">
                                PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE
                            </h4>
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
                                <h4 style="font-size: 11px">
                                    PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE
                                </h4>
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
                                <h4 style="font-size: 11px">
                                    PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE
                                </h4>
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
                            <h4 style="font-size: 11px">
                                PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE
                            </h4>
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
                            <h4 style="font-size: 11px">
                                PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE
                            </h4>
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
                            <h4 style="font-size: 11px">
                                PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE
                            </h4>
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
            <h3>
                O Sr. Silvério Domingues, atuante no mercado imobiliário há quase 50 anos, fundou, em 1988,
                a Samburá Imóveis, empresa que trabalha sobre os pilares da confiança e credibilidade para
                prestar sempre o melhor serviço aos seus clientes.
            </h3>
            <p>
                Hoje trabalhamos com aluguel, compra e venda de casas, terrenos, apartamentos, imóveis comerciais,
                condomínios fechados horizontais e verticais, além de vendas em lançamentos e avaliação de imóveis.
            </p>
            <a class="cta-btn scrollto" href="#">Conheça nossa história!</a>
        </div>
    </div>
</section>
<!-- END ABOUT -->
@endsection

@section('style')
<style>
    .unimob{
        z-index: 999;
        max-width: 100px;
        margin-top: -120px;
        margin-left: 93%;
        display: flex;
        position: relative;
        text-align: right;
    }

    @media (max-width: 768px) {
        .unimob{
            z-index: 999;
            margin-top: -80px;
            margin-left: 85%;
            width: 80px;
            display: flex;
            position: relative;
        }
    }
</style>
@endsection
