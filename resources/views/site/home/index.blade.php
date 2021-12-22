@extends('site.layout.app')

@section('hero-banner')
    @include('site.layout.parts.hero')
@endsection

@section('busca')
    @include('site.layout.parts.busca')
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
</style>
@endsection
