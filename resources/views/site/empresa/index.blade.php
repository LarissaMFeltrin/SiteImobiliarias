@extends('site.layout.app')

@section('hero-banner')
@endsection

@section('busca')
@endsection

@section('main')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('images/about.jpeg') }}" class="img-fluid w-100" alt="">
                </div>
                <div class="col-12 mt-3">
                    <p style="text-align: justify;">
                        O Sr. Silvério Domingues, atuante no mercado imobiliário há quase 50 anos, fundou, em 1988, a Samburá Imóveis, empresa que trabalha sobre os pilares da confiança e credibilidade para prestar sempre o melhor serviço aos seus clientes.
                        <br><br>
                        A Samburá Imóveis é dirigida pelos irmãos Silvio Luiz Domingues, Diretor de Vendas e Marcos Ricardo Domingues, Diretor de Locação e Administração e desde 2009 entrou em sua terceira geração, com o início das atividades de Gabriel Zaupa Domingues, hoje Gerente Comercial.
                        <br><br>
                        Ao longo de sua história, participa ativamente do desenvolvimento da cidade de Presidente Prudente, trabalhando na venda de grandes empreendimentos imobiliários e imóveis de terceiros, bem como na locação de imóveis comerciais e residenciais para todos os setores da sociedade.
                        <br><br>
                        A Samburá Imóveis é reconhecida por ser administradora com talento e sensibilidade para atender e orientar os seus clientes, objetivando sempre o melhor investimento e transação, pautada em princípios éticos, transparência e segurança na realização de seus negócios.
                        <br><br>
                        Antenada a evolução do mercado, a Samburá Imóveis investe em tecnologia, inteligência e inovação, além de alta capacitação de seus colaboradores, para oferecer sempre excelência no desenvolvimento dos negócios.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('style')
<style>
    #header{
        background-image: url("{{ asset('images/banner_00.jpg') }}");
        background-repeat: no-repeat, repeat;
        background-size: 100%;
        background-attachment: fixed;
        background-position: 0px top;
    }
    #header a{
        color: black;
    }
    #header #navbar i {
        color: #121d24 !important;
    }
    .navbar .getstarted, .navbar .getstarted{
        border-color: red;
    }
    #main{
        margin-top: 200px !important;
    }
</style>
@endsection
