<header class="site-header site-header__header-one ">
    <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="logo-box clearfix">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ url('cursos/assets/images/logo-dark.png') }}" class="main-logo" width="128" alt="CAT" />
                </a>
                <div class="header__social">
                    <a href="{{ url('https://www.facebook.com/catbroficial') }}" TARGET="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="{{ url('https://www.instagram.com/catbr.oficial/?hl=pt-br/') }}" TARGET="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="{{ url('https://api.whatsapp.com/send?phone=55513058338') }}" TARGET="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
                <!-- /.header__social -->
                <button class="menu-toggler" data-target=".main-navigation">
                    <span><i class="fal fa-bars"></i></span>
                </button>
            </div>
            <!-- /.logo-box -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="main-navigation">
                <ul class=" navigation-box">
                    <li class="{{ Request::routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Home</a>
                        <!-- /.sub-menu -->
                    </li>
                    <li class="{{ Request::routeIs('about') ? 'active' : '' }}">
                        <a href="{{ route('about') }}">Sobre Nós</a>
                        <!-- /.sub-menu -->
                    </li>
                    <li class="{{ Request::routeIs('awards') ? 'active' : '' }}">
                        <a href="{{ route('awards') }}">premiações</a>
                        <!-- /.sub-menu -->
                    </li>
                    <li class="{{ Request::routeIs('course') ? 'active' : '' }}">
                        <a href="{{ route('course') }}">Treinamentos</a>
                    </li>
                    <li class="{{ Request::routeIs('service') ? 'active' : '' }}">
                        <a href="{{ route('service') }}">Serviços</a>
                    </li>
                    <li class="{{ Request::routeIs('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">Contato</a>
                    </li>
                    <li class="{{ Request::routeIs('facuHome') ? 'active' : '' }}">
                        <a href="{{ route('facuHome') }}"><i class="fad fa-graduation-cap"></i> Graduação</a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /.container -->
    </nav>
    <div class="site-header__decor">
        <div class="site-header__decor-row">
            <div class="site-header__decor-single">
                <div class="site-header__decor-inner-1"></div>
                <!-- /.site-header__decor-inner -->
            </div>
            <!-- /.site-header__decor-single -->
            <div class="site-header__decor-single">
                <div class="site-header__decor-inner-2"></div>
                <!-- /.site-header__decor-inner -->
            </div>
            <!-- /.site-header__decor-single -->
            <div class="site-header__decor-single">
                <div class="site-header__decor-inner-3"></div>
                <!-- /.site-header__decor-inner -->
            </div>
            <!-- /.site-header__decor-single -->
        </div>
        <!-- /.site-header__decor-row -->
    </div>
    <!-- /.site-header__decor -->
</header>
