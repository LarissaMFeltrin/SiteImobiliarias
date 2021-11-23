@extends('site.layout.app')

@section('hero-banner')
<section id="hero">
</section>
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
@endsection
