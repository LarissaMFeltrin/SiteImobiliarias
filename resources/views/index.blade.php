<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sambura Imóveis</title>
  <meta name="description" content="Venda e aluguel de imoveis em Presidente Prudente Sao Paulo. Sambura Imóveis">
  <meta name="keywords" content="sites, web, sambura, imoveis, imobiliaria, aluguel, venda, locação, rent, sale, sp, corretor, online, 19015-204">

  <!-- Favicons -->
  <link href="{{ asset('images/favicon_branco.png') }}" rel="icon">
  <link href="{{ asset('images/favicon_branco.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/floating-whatsapp/floating-wpp.css" rel="stylesheet">



  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <!--<h1 class="logo"><a href="index.html">Dewi</a></h1>-->
        <a href="index.html" class="logo">
          <img src="{{ asset('images/logotipo_branco.png') }}" alt="" class="img-fluid">
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
                <h1>O imóvel que você procura está aqui!</h1>
                <p>Priorizamos a integridade, transparência e atendimento personalizado aos nossos clientes!</p>
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
        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Imóveis em Destaque para Alugar</h2>
                </div>
                <div class="row">
                    <div class="swiper team-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide col-lg-4 col-md-6">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="pic">
                                        <img src="{{ asset('images/imovel/imgr-000031851.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>R$ 570.00</h4>
                                        <span title="PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE">
                                            {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...");}}
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
                                            {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...");}}
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
                                        {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...");}}
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
        <!-- End Team Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team team-swiper section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Imóveis em Destaque para Venda</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="pic">
                            <img src="{{ asset('images/imovel/imgr-000031851.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>R$ 570.00</h4>
                            <span title="PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE">
                                {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...");}}
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

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic">
                            <img src="{{ asset('images/imovel/imgr-000031851.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>R$ 570.00</h4>
                            <span title="PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE">
                                {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...");}}
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

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="pic">
                            <img src="{{ asset('images/imovel/imgr-000031851.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                        <h4>R$ 570.00</h4>
                        <span title="PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE">
                            {{ mb_strimwidth("PARTAMENTO PARA LOCACAO EM PRESIDENTE PRUDENTE/SP PRUDENTE", 0, 52, "...");}}
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

            </div>
        </section>
        <!-- End Team Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row p-3">
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
                <img src="{{ asset('images/logotipo_branco.png') }}" alt="" class="img-fluid" style="max-width: 180px">
              <p style="padding: 10px">
                Av. Manoel Goulart, nº 875 - Centro, <br>
                Pres. Prudente - SP, <br>
                19015-240 <br>
                <strong>C 9221-J</strong> <br>
                <strong>Telefone: (18) 3226-2885</strong> <br>
                <strong>Whatsapp: (18) 99601-7141</strong> <br>
                <strong>Email:</strong> atendimento@samburaimoveis.com.br<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/sambura.imov" target="_" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/samburaimoveis" target="_" class="instagram"><i class="bx bxl-instagram"></i></a>
                <!--
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossos Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Locação</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Venda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Empresa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contato</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Serviços</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Área Proprietário</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Área Locatário</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Área do Atendente</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <a href="https://www.unimob.com.br/" target="_">
                <img src="{{ asset('images/unimob.png') }}" alt="" class="img-fluid" style="max-width: 100px">
            </a>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sambura Imóveis</span></strong>. Todos os direitos reservados.
      </div>
      <div class="credits">
        Desenvolvido por <a href="https://scordon.com.br/" target="_">Sistemas Cordon</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="myButton" style="z-index: 100;"></div>

  <!-- JQaury -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/floating-whatsapp/floating-wpp.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

    <script type="text/javascript">
        $(function () {
            $('#myButton').floatingWhatsApp({
                phone: '18996017141',
                popupMessage: 'Tem alguma dúvida, gostaria de mais informações?',
                message: "Sim",
                showPopup: true,
                showOnIE: true,
                headerTitle: 'Sambura Imóveis',
                headerColor: '#075e54',
                backgroundColor: '#075e54',
                buttonImage: `<img src="{{ asset('images/whatsapp.svg') }}" />`
            });
        });
    </script>

</body>

</html>
