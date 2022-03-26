<footer class="site-footer">
    <div class="site-footer__upper">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="footer-widget footer-widget__contact">
                        <h2 class="footer-widget__title">Cursos</h2>
                        <!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__course-list">
                            <li>
                                <h2><a href="{{ route('course') }}">Telecomunicações</a></h2>
                            </li>
                            <li>
                                <h2><a href="{{ route('course') }}"> Segurança Eletrônica </a></h2>
                            </li>
                            <li>
                                <h2><a href="{{ route('course') }}"> Eletricidade </a></h2>
                            </li>
                            <li>
                                <h2><a href="{{ route('course') }}"> Segurança no Trabalho </a></h2>
                            </li>

                            <li>
                                <h2><a href="{{ route('course') }}"> Informática </a></h2>
                            </li>

                            <li>
                                <h2><a href="{{ route('facuHome') }}"> Graduação </a></h2>
                            </li>
                        </ul>
                        <!-- /.footer-widget__course-list -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="footer-widget footer-widget__link">
                        <h2 class="footer-widget__title">Explorar</h2>
                        <!-- /.footer-widget__title -->
                        <div class="footer-widget__link-wrap">
                            <ul class="list-unstyled footer-widget__link-list">
                                <li class="current"><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">Sobre Nós</a> </li>
                                <li><a href="{{ route('awards') }}">Premiações</a></li>
                                <li><a href="{{ route('course') }}">Treinamentos</a></li>
                                <li><a href="{{ route('contact') }}">Contato</a></li>
                            </ul>
                        </div>
                        <!-- /.footer-widget__link-wrap -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-lg-3 -->

                <!-- /.col-lg-3 -->
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="footer-widget footer-widget__about">
                        <h2 class="footer-widget__title">Sobre</h2>
                        <!-- /.footer-widget__title -->
                        <p class="footer-widget__text">Seja bem vindo! Nossa equipe esta a sua disposição.</p>
                        <!-- /.footer-widget__text -->
                        <div class="footer-widget__btn-block">
                            <a href="{{ route('contact') }}" class="thm-btn">Contato</a>
                            <!-- /.thm-btn -->

                            <!-- /.thm-btn -->
                        </div>
                        <div class="footer-widget__btn-block">
                            <a href="{{ url('https://api.whatsapp.com/send?phone=555130858338') }}" target="_blank" class="thm-btn whats"><i class="fab fa-whatsapp"></i> Chama no Whats</a>
                            <!-- /.thm-btn -->

                            <!-- /.thm-btn -->
                        </div>
                        <!-- /.footer-widget__btn-block -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-lg-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.site-footer__upper -->
    <div class="site-footer__bottom">
        <div class="container">
            <p class="site-footer__copy"> CAT - Centro de Aperfeiçoamento Tecnológico -  <?= date('d/m/Y');; ?></p>
            <div class="site-footer__social">
                <a href="#" data-target="html" class="scroll-to-target site-footer__scroll-top"><i class="far fa-arrow-up"></i></a>
                <a href="{{ url('https://www.facebook.com/catbroficial') }}" TARGET="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="{{ url('https://www.instagram.com/catbr.oficial/?hl=pt-br/') }}" TARGET="_blank"><i class="fab fa-instagram"></i></a>
                <a href="{{ url('https://api.whatsapp.com/send?phone=555130858338') }}" TARGET="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
            <!-- /.site-footer__social -->
            <!-- /.site-footer__copy -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.site-footer__bottom -->

    <div id="bottom-footer" class="bottomfooter">
        <div class="container">
                <p id="powered" class="powered">Desenvolvido por
                    <a href="{{ url('https://bvweb.com.br')}}">BVWEB - Designer &copy; 2021</a> </p>
        </div>
    </div>
</footer>
