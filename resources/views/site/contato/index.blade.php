@extends('site.layout.app')

@section('hero-banner')

@endsection

@section('busca')

@endsection

@section('main')
<section id="contact" class="contact">
    <div class="container">

        <div class=" section-title">
            <h2>Contato</h2>
            <p>Fale com a Samburá</p>
        </div>

        <div class="row">
            <div class="col-lg-6">

                <div class="row">
                <div class="col-md-12">
                    <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Nosso endereço</h3>
                    <p>
                        <a href="https://www.google.com/maps/place/Av.+Manoel+Goulart,+875+-+Centro,+Pres.+Prudente+-+SP,+19015-240/data=!4m2!3m1!1s0x9493f44c73b9e24f:0x29b0ed7c5dca36ef?sa=X&ved=2ahUKEwiknOGq26z0AhXmqZUCHUE-CyAQ8gF6BAgTEAE"
                           target="_">
                            Av. Manoel Goulart, nº 875 - Centro,
                            Pres. Prudente - SP,
                            19015-240
                        </a>
                    </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Nosso emails</h3>
                    <p>
                        <a href="mailto:atendimento@samburaimoveis.com.br"
                           target="_">
                            atendimento@samburaimoveis.com.br
                        </a>
                        <br>
                        <br>
                    </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Nossos telefones</h3>
                    <p>
                        <a href="tel:1832262885" target="_">
                            Telefone: (18) 3226-2885
                        </a>
                        <br>
                        <a href="https://api.whatsapp.com/send?phone=18996017141" target="_">
                            Whatsapp: (18) 99601-7141
                        </a>
                    </p>
                    </div>
                </div>
                </div>

            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Enviar</button></div>
                </form>
            </div>
        </div>

    </div>
</section>
@endsection

@section('style')
<style>
a {
    color: #121d24;
    text-decoration: none;
}

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
    margin-top: 230px !important;
}
</style>
@endsection
