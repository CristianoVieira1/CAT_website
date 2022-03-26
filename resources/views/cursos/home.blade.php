@extends('cursos.master.master')
@section('content')
<div class="banner-wrapper">
    <section class="banner-one banner-carousel__one no-dots owl-theme owl-carousel">
        <div class="banner-one__slide banner-one__slide-one">
            <div class="container">
                <div class="banner-one__bubble-1"></div>
                <!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-2"></div>
                <!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-3"></div>
                <!-- /.banner-one__bubble- -->
                <img src="{{ url('cursos/assets/images/slider-1-scratch.png') }}" alt="" class="banner-one__scratch">
                <img src="{{ Voyager::image(setting('banners.banner_one_image')) }}" class="banner-one__person" alt="CAT - Treinamentos">
                 <div class="row no-gutters">
                    <div class="col-xl-12">
                        <h3 class="banner-one__title banner-one__light-color">{{ setting('banners.banner_one_title') }}</h3>
                        <!-- /.banner-one__title -->
                        <p class="banner-one__tag-line">{{ setting('banners.banher_one_subTitle') }}</p>
                        <!-- /.banner-one__tag-line -->
                        <a href="{{ route('course') }}" class="thm-btn banner-one__btn">Saber mais</a>
                    </div>
                    <!-- /.col-xl-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.banner-one__slide -->
        <div class="banner-one__slide banner-one__slide-two">
            <div class="container">
                <div class="banner-one__bubble-1"></div>
                <!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-2"></div>
                <!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-3"></div>
                <!-- /.banner-one__bubble- -->
                <img src="{{ url('cursos/assets/images/slider-1-scratch.png') }}" alt="" class="banner-one__scratch">
                <img src="{{ Voyager::image(setting('banners.banner_two_image')) }}" class="banner-one__person" alt="">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <h3 class="banner-one__title banner-one__light-color">{{ setting('banners.banner_two_title') }}</h3>
                        <!-- /.banner-one__title -->
                        <p class="banner-one__tag-line">{{ setting('banners.banher_two_subTitle') }}</p>
                        <!-- /.banner-one__tag-line -->
                        <a href="{{ route('course') }}" class="thm-btn banner-one__btn">Saber mais</a>
                    </div>
                    <!-- /.col-xl-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>

        <div class="banner-one__slide banner-one__slide-two">
            <div class="container">
                <div class="banner-one__bubble-1"></div>
                <!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-2"></div>
                <!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-3"></div>
                <!-- /.banner-one__bubble- -->
                <img src="{{ url('cursos/assets/images/slider-1-scratch.png') }}" alt="" class="banner-one__scratch">
                <img src="{{ Voyager::image(setting('banners.banner_three_image')) }}" class="banner-one__person" alt="">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <h3 class="banner-one__title banner-one__light-color">{{ setting('banners.banner_three_title') }}</h3>
                        <!-- /.banner-one__title -->
                        <p class="banner-one__tag-line">{{ setting('banners.banner_three_subTitle') }}</p>
                        <!-- /.banner-one__tag-line -->
                        <a href="{{ route('facuHome') }}" class="thm-btn banner-one__btn">Saber mais</a>
                    </div>
                    <!-- /.col-xl-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.banner-one__slide -->
    </section>
    <!-- /.banner-one -->
    <div class="banner-carousel-btn">
        <a href="#" class="banner-carousel-btn__left-btn"><i class="far fa-arrow-left"></i></a>
        <a href="#" class="banner-carousel-btn__right-btn"><i class="far fa-arrow-right"></i></a>
    </div>
    <!-- /.banner-carousel-btn -->
    <div class="banner-one__cta">
        <div class="banner-one__cta-icon">
            <i class="fas fa-graduation-cap"></i>
            <!-- /.kipso-icon-knowledge -->
        </div>
        <!-- /.banner-one__cta-icon -->
        <div class="banner-one__cta-title">
            <h3 class="banner-one__cta-text"><a href="{{ route('facuHome') }}">Conheça nossa graduação EAD!</a></h3>
            <!-- /.banner-one__cta-text -->
        </div>
        <!-- /.banner-one__cta-title -->
        <div class="banner-one__cta-link">
            <a href="{{ route('facuHome') }}" target="_blank"><i class="far fa-arrow-right"></i></a>
        </div>
        <!-- /.banner-one__cta-link -->
    </div>
    <!-- /.banner-one__cta -->
</div>
<!-- /.banner-wrapper -->
<section class="about-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-two__content">
                    <div class="block-title text-left">
                        <h2 class="block-title__title">CAT - Centro de Aperfeiçoamento Tecnológico </h2>
                        <!-- /.block-title__title -->
                    </div>
                    <!-- /.block-title -->
                    <p class="about-two__text">Fundado para preparar profissionais qualificados para as mais diversas áreas em segurança no trabalho, telecomunicações, eletricidade e informática especializada.</p>
                    <!-- /.about-two__text -->
                    <div class="about-two__single-wrap">
                        <div class="about-two__single">
                            <div class="about-two__single-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <!-- /.kipso-icon-professor -->
                            </div>
                            <!-- /.about-two__single-icon -->
                            <div class="about-two__single-content">
                                <p class="about-two__single-text"> Comece a aprender com nossos especialistas</p>
                                <!-- /.about-two__single-text -->
                            </div>
                            <!-- /.about-two__single-content -->
                        </div>
                        <!-- /.about-two__single -->
                        <div class="about-two__single">
                            <div class="about-two__single-icon">
                                <i class="fas fa-book-reader"></i>
                                <!-- /.kipso-icon-professor -->
                            </div>
                            <!-- /.about-two__single-icon -->
                            <div class="about-two__single-content">
                                <p class="about-two__single-text"> Aprimore suas habilidades conosco agora</p>
                                <!-- /.about-two__single-text -->
                            </div>
                            <!-- /.about-two__single-content -->
                        </div>
                        <!-- /.about-two__single -->
                    </div>
                    <!-- /.about-two__single-wrap -->
                    <a href="{{ route('contact') }}" class="thm-btn">Contato</a>
                    <!-- /.thm-btn -->
                </div>
                <!-- /.about-two__content -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-xl-6 d-flex justify-content-xl-end justify-content-sm-center">
                <div class="about-two__image">
                    <span class="about-two__image-dots"></span>
                    <!-- /.about-two__image-dots -->
                    <img src="{{ url('cursos/assets/images/about-1-1.jpg') }}" alt="">
                    <!-- /.about-two__count -->
                </div>
                <!-- /.about-two__image -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.about-two -->
<section class="course-one__top-title home-one">
    <div class="container">
        <div class="block-title mb-0">
            <h2 class="block-title__title">CURSOS MAIS <br> POPULARES</h2>
            <!-- /.block-title__title -->
        </div>
        <!-- /.block-title -->
    </div>
    <!-- /.container -->
    <div class="course-one__top-title__curve"></div>
    <!-- /.course-one__top-title__curve -->
</section>
<!-- /.course-one__top-title -->


    @isset($posts)

<section class="course-one course-one__teacher-details home-one">
    <div class="container">

        <div class="course-one__carousel owl-carousel owl-theme">
            @foreach($posts as $post)
            <div class="item">


                <div class="course-one__single color-1">
                    <div class="course-one__image">
                        <img src="{{ Storage::url($post->cover)}}" alt="">
                        <i class="far fa-heart"></i>
                        <!-- /.far fa-heart -->
                    </div>
                    <!-- /.course-one__image -->
                    <div class="course-one__content">
                        <a href="{{ route('course') }}" class="course-one__category">{{ $post->category }}</a>
                        <h2 class="course-one__title"><a href="{{ route('details', $post->uri) }}">{{ $post->title }}</a></h2>
                        <!-- /.course-one__title -->
                        <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                            <!-- /.course-one__stars-wrap -->
                            <span class="course-one__count">4.8</span>
                            <!-- /.course-one__count -->
                            <span class="course-one__stars-count">250</span>
                            <!-- /.course-one__stars-count -->
                        </div>
                        <!-- /.course-one__stars -->
                        <div class="course-one__meta">
                            <a href="{{ route('details', $post->uri) }}"><i class="far fa-clock"></i>{{ $post->Workload }}</a>
                        </div>
                        <!-- /.course-one__meta -->
                        <a href="{{ route('details', $post->uri) }}" class="course-one__link">Visualizar</a>
                        <!-- /.course-one__link -->
                    </div>
                    <!-- /.course-one__content -->
                </div>


                <!-- /.course-one__single -->
            </div>
            @endforeach
        </div>

    </div>

    <!-- /.container -->
</section>

    @endisset

<section class="thm-gray-bg course-category-one">
    <div class="container-fluid text-center">
        <div class="block-title text-center">
            <h2 class="block-title__title">Treinamentos</h2>
            <!-- /.block-title__title -->
        </div>
        <!-- /.block-title -->
        <div class="course-category-one__carousel owl-carousel owl-theme">
            <div class="item">
                <div class="course-category-one__single color-1">
                    <div class="course-category-one__icon">
                        <i class="fal fa-user-hard-hat"></i>
                    </div>
                    <!-- /.course-category-one__icon -->
                    <h3 class="course-category-one__title"><a href="{{ route('course') }}">Telecomunicações</a></h3>
                    <!-- /.course-category-one__title -->
                </div>
                <!-- /.course-category-one__single -->
            </div>
            <!-- /.item -->
            <div class="item">
                <div class="course-category-one__single color-2">
                    <div class="course-category-one__icon">
                        <i class="far fa-cctv"></i>
                    </div>
                    <!-- /.course-category-one__icon -->
                    <h3 class="course-category-one__title"><a href="{{ route('course') }}">Segurança Eletrônica</a></h3>
                    <!-- /.course-category-one__title -->
                </div>
                <!-- /.course-category-one__single -->
            </div>
            <!-- /.item -->
            <div class="item">
                <div class="course-category-one__single color-3">
                    <div class="course-category-one__icon">
                        <i class="far fa-shield-alt"></i>
                    </div>
                    <!-- /.course-category-one__icon -->
                    <h3 class="course-category-one__title"><a href="{{ route('course') }}">Segurança no Trabalho</a></h3>
                    <!-- /.course-category-one__title -->
                </div>
                <!-- /.course-category-one__single -->
            </div>
            <!-- /.item -->
            <div class="item">
                <div class="course-category-one__single color-4">
                    <div class="course-category-one__icon">
                        <i class="fas fa-computer-classic"></i>
                    </div>
                    <!-- /.course-category-one__icon -->
                    <h3 class="course-category-one__title"><a href="{{ route('course') }}">TI & Softwares</a></h3>
                    <!-- /.course-category-one__title -->
                </div>
                <!-- /.course-category-one__single -->
            </div>
            <!-- /.item -->=
            <!-- /.item -->
            <div class="item">
                <div class="course-category-one__single color-1">
                    <div class="course-category-one__icon">
                        <i class="far fa-university"></i>
                    </div>
                    <!-- /.course-category-one__icon -->
                    <h3 class="course-category-one__title"><a href="{{ url('https://eadcat.com.br') }}" target="_blank">Graduação EAD</a></h3>
                    <!-- /.course-category-one__title -->
                </div>
                <!-- /.course-category-one__single -->
            </div>
            <!-- /.item -->
        </div>
        <!-- /.course-category-one__carousel owl-carousel owl-theme -->

        <a href="{{route('course')}}" class="thm-btn">Cursos</a>
        <!-- /.thm-btn -->
    </div>
    <!-- /.container-fluid -->
</section>





<section class="course-one__top-title home-one">
    <div class="container">
        <div class="block-title mb-0">
            <h2 class="block-title__title">ALGUNS DE NOSSOS <br> SERVIÇOS</h2>
            <!-- /.block-title__title -->
        </div>
        <!-- /.block-title -->
    </div>
    <!-- /.container -->
    <div class="course-one__top-title__curve"></div>
    <!-- /.course-one__top-title__curve -->
</section>
<!-- /.course-one__top-title -->


    @isset($servis)

<section class="course-one course-one__teacher-details home-one">
    <div class="container">

        <div class="course-one__carousel owl-carousel owl-theme">
            @foreach($servis as $servi)
            <div class="item">


                <div class="course-one__single color-1">
                    <div class="course-one__image">
                        <img src="{{ Storage::url($servi->cover)}}" class="cta-three__image" alt="">
                        <i class="far fa-heart"></i>
                        <!-- /.far fa-heart -->
                    </div>
                    <!-- /.course-one__image -->
                    <div class="course-one__content">
                        <a href="{{ route('course') }}" class="course-one__category">{{ $servi->category }}</a>
                        <h2 class="course-one__title"><a href="{{ route('serviceDetails', $servi->uri) }}">{{ $servi->title }}</a></h2>
                        <!-- /.course-one__title -->
                        <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                            <!-- /.course-one__stars-count -->
                        </div>
                        <!-- /.course-one__stars -->
                        <!-- /.course-one__meta -->
                        <a href="{{ route('serviceDetails', $servi->uri) }}" class="course-one__link">Visualizar</a>
                        <!-- /.course-one__link -->
                    </div>
                    <!-- /.course-one__content -->
                </div>


                <!-- /.course-one__single -->
            </div>
            @endforeach
        </div>

    </div>

    <!-- /.container -->
</section>

    @endisset
<!-- /.thm-gray-bg course-category-one -->
<section class="cta-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 clearfix">
                <img src="{{ url('cursos/assets/images/ftth.png') }}" class="cta-three__image" alt="">
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="cta-three__content">
                    <div class="block-title text-left">
                        <h2 class="block-title__title">Treinamento FTTH – Especialização em GPON & FTTx.</h2>
                        <!-- /.block-title__title -->
                    </div>
                    <!-- /.block-title -->
                    <p class="cta-three__text">O objetivo do curso é capacitar profissionais para analisar e planejar aplicações nas redes de trabalho baseados nas tecnologias PON, GPON e FTTx, determinar pontos de falha e implementar infra-estrutura.</p>
                    <!-- /.cta-three__text -->
                    <div class="cta-three__single-wrap">
                        <div class="cta-three__single">
                            <i class="fal fa-graduation-cap"></i>
                            <p class="cta-three__single-text">
                                Cursos profissionais
                            </p>
                            <!-- /.cta-three__single-text -->
                        </div>
                        <!-- /.cta-three__single -->
                        <div class="cta-three__single">
                            <i class="fas fa-router"></i>
                            <p class="cta-three__single-text">FTTH, GPON, FTTx
                            </p>
                            <!-- /.cta-three__single-text -->
                        </div>
                        <!-- /.cta-three__single -->
                        <div class="cta-three__single">
                            <i class="fas fa-user-chart"></i>
                            <p class="cta-three__single-text">
                                Professores Especialistas
                            </p>
                            <!-- /.cta-three__single-text -->
                        </div>
                        <!-- /.cta-three__single -->
                    </div>
                    <!-- /.cta-three__single-wrap -->
                    <a href="{{ route('contact') }}" class="thm-btn">Saber Mais</a>
                    <!-- /.thm-btn -->
                </div>
                <!-- /.cta-three__content -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- /.blog-one blog-page -->
<section class="cta-four">
    <img src="{{ url('cursos/assets/images/circle-stripe-1.png') }}" class="cta-four__stripe" alt="">
    <img src="{{ url('cursos/assets/images/line-stripe-1.png') }}" class="cta-four__line" alt="">
    <div class="container text-center">
        <div class="block-title">
            <h2 class="block-title__title">Temos os melhores professores <br> em todas as disciplinas</h2>
            <!-- /.block-title__title -->
        </div>
        <!-- /.block-title -->
        <p class="cta-four__text">As profissões da área de Telecom relacionam-se à criação e desenvolvimento de sistemas que facilitam a transmissão e a recepção de informações. Esses profissionais, em diferentes funções, são responsáveis pela elaboração e execução de ferramentas e canais para a codificação e a disseminação de imagens, sons e todo tipo de conteúdo transmitido por ondas eletromagnéticas.
        </p>
        <!-- /.cta-four__text -->
    </div>
    <!-- /.container text-center -->
</section>
<!-- /.cta-four -->
<section class="cta-one">
    <div class="container">
        <h2 class="cta-one__title">Entre em contato agora mesmo!</h2><!-- /.cta-one__title -->
        <div class="cta-one__btn-block">
                    <a href="{{ url('https://api.whatsapp.com/send?phone=555130858338') }}" target="_blank" class="thm-btn whats"><i class="fab fa-whatsapp"></i> Chama no Whats</a>
                </div><!-- /.cta-one__btn-block -->
    </div><!-- /.container -->
</section><!-- /.cta-one -->
@endsection
