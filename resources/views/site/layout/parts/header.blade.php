<header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <!--<h1 class="logo"><a href="index.html">Dewi</a></h1>-->
        <a href="{{ route('home') }}" class="logo">
          <img src="{{ asset('images/logotipo.png') }}" alt="" class="img-fluid">
        </a>

      <nav id="navbar" class="navbar">
        <ul>
            <li>
                <a
                class="nav-link scrollto
                @if(Route::currentRouteName() === 'home') active @endif"
                href="{{ route('home') }}">
                    Home &nbsp;
                </a>
            </li>
            <li class="dropdown">
                <a href="#">
                    <span>Busca</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <ul>
                <li><a href="#">Venda</a></li>
                <li><a href="#">Locação</a></li>
                </ul>
            </li>
            <li>
                <a
                class="nav-link scrollto
                @if(Route::currentRouteName() === 'empresa') active @endif"
                href="{{ route('empresa') }}">
                    Empresa &nbsp;
                </a>
            </li>
            <li class="dropdown"><a href="#"><span>Serviços</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="#">Área do Proprietário</a></li>
                <li><a href="#">Área do Locatário</a></li>
                <li><a href="#">Área do Atendente</a></li>
                </ul>
            </li>
            <li>
                <a
                class="nav-link scrollto
                @if(Route::currentRouteName() === 'contato') active @endif"
                href="{{ route('contato') }}">
                    Contato
                </a>
            </li>
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
