@extends('cursos.master.master')
@section('content')
<section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="active"><a href="{{ route('about') }}">Sobre nós</a></li>
        </ul><!-- /.list-unstyled -->
        <h2 class="inner-banner__title">Sobre nós</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="about-one about-one__about-page">
    <img src="{{ url('cursos/assets/images/circle-stripe.png') }}" class="about-one__circle" alt="">
    <div class="container text-center">
        <div class="block-title text-center">
            <h2 class="block-title__title">Venha estudar com professores especialistas</h2><!-- /.block-title__title -->
        </div><!-- /.block-title -->
        <div class="about-one__img">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ url('cursos/assets/images/about-2-1.jpg') }}" alt="">
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <img src="{{ url('cursos/assets/images/about-2-2.jpg') }}" alt="">
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

        </div><!-- /.about-one__img -->
        <p class="about-one__text">{{ setting('site.about_prinipy') }}</p><!-- /.about-one__text -->
        <a href="{{ route('course') }}" class="thm-btn about-one__btn">Comece a aprender agora</a><!-- /.thm-btn -->
    </div><!-- /.container -->
</section><!-- /.about-one about-one__about-page -->

<section class="faq-one">
    <div class="container">
        <h2 class="about_text center">Sobre o CAT</h2>
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="faq-one__single">
                    <div class="faq-one__icon">
                        <span><i class="fal fa-pencil"></i></span>
                    </div><!-- /.faq-one__icon -->
                    <div class="faq-one__content">
                        <h2 class="faq-one__title">{{ setting('site.about_one_title') }}</h2><!-- /.faq-one__title -->
                        <p class="faq-one__text">{{ setting('site.about_one_description') }}</p><!-- /.faq-one__text -->
                    </div><!-- /.faq-one__content -->
                </div><!-- /.faq-one__single -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="faq-one__single">
                    <div class="faq-one__icon">
                        <span><i class="fas fa-user-chart"></i></span>
                    </div><!-- /.faq-one__icon -->
                    <div class="faq-one__content">
                        <h2 class="faq-one__title">{{ setting('site.about_two_title') }}</h2><!-- /.faq-one__title -->
                        <p class="faq-one__text">{{ setting('site.about_two_description') }}</p><!-- /.faq-one__text -->
                    </div><!-- /.faq-one__content -->
                </div><!-- /.faq-one__single -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="faq-one__single">
                    <div class="faq-one__icon">
                        <span><i class="fal fa-bolt"></i></span>
                    </div><!-- /.faq-one__icon -->
                    <div class="faq-one__content">
                        <h2 class="faq-one__title">{{ setting('site.about_three_title') }}</h2><!-- /.faq-one__title -->
                        <p class="faq-one__text">{{ setting('site.about_three_description') }}</p><!-- /.faq-one__text -->
                    </div><!-- /.faq-one__content -->
                </div><!-- /.faq-one__single -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="faq-one__single">
                    <div class="faq-one__icon">
                        <span><i class="fal fa-tools"></i></span>
                    </div><!-- /.faq-one__icon -->
                    <div class="faq-one__content">
                        <h2 class="faq-one__title">{{ setting('site.about_four_title') }}</h2><!-- /.faq-one__title -->
                        <p class="faq-one__text">{{ setting('site.about_four_description') }}</p><!-- /.faq-one__text -->
                    </div><!-- /.faq-one__content -->
                </div><!-- /.faq-one__single -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="faq-one__single">
                    <div class="faq-one__icon">
                        <span><i class="far fa-search"></i></span>
                    </div><!-- /.faq-one__icon -->
                    <div class="faq-one__content">
                        <h2 class="faq-one__title">{{ setting('site.about_five_title') }}</h2><!-- /.faq-one__title -->
                        <p class="faq-one__text">{{ setting('site.about_five_description') }}</p><!-- /.faq-one__text -->
                    </div><!-- /.faq-one__content -->
                </div><!-- /.faq-one__single -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="faq-one__single">
                    <div class="faq-one__icon">
                        <span><i class="far fa-fish"></i></span>
                    </div><!-- /.faq-one__icon -->
                    <div class="faq-one__content">
                        <h2 class="faq-one__title">{{ setting('site.about_six_title') }}</h2><!-- /.faq-one__title -->
                        <p class="faq-one__text">{{ setting('site.about_six_description') }}</p><!-- /.faq-one__text -->
                    </div><!-- /.faq-one__content -->
                </div><!-- /.faq-one__single -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.faq-one -->

<section class="cta-one">
    <div class="container">
        <h2 class="cta-one__title">Entre em contato agora mesmo!</h2><!-- /.cta-one__title -->
        <div class="cta-one__btn-block">
            <a href="{{ url('https://api.whatsapp.com/send?phone=55513058338') }}" target="_blank" class="thm-btn whats"><i class="fab fa-whatsapp"></i> Chama no Whats</a>
        </div><!-- /.cta-one__btn-block -->
    </div><!-- /.container -->
</section><!-- /.cta-one -->

<section class="become-teacher">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="become-teacher__content">
                    <h2 class="become-teacher__title">{{ setting('site.about_story_title') }}</h2><!-- /.become-teacher__title -->
                    <p class="become-teacher__text">{{ setting('site.about_story_description') }}</p><!-- /.become-teacher__text -->
                    <h2 class="become-teacher__subtitle">{{ setting('site.about_company') }}</h2><!-- /.become-teacher__subtitle -->
                    <p class="become-teacher__text">{{ setting('site.about_company_description') }}</p><!-- /.become-teacher__text -->
                    <h2 class="become-teacher__subtitle">{{ setting('site.adbout_details_title') }}</h2><!-- /.become-teacher__subtitle -->
                    <p class="become-teacher__text">{{ setting('site.adbout_details_description') }}</p><!-- /.become-teacher__text -->
                </div><!-- /.become-teacher__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="become-teacher__form">
                    <div class="become-teacher__form-top">
                        <h2 class="become-teacher__form-title">
                            Entre em contato
                        </h2><!-- /.become-teacher__form-title -->
                    </div><!-- /.become-teacher__top -->
                    <form action="{{ route('sendEmail') }}" method="post" autocomplete="off" class="become-teacher__form-content">
                        @csrf
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control {{ ($errors->has('name') ? 'is-invalid' : '') }}"  placeholder="Nome Completo"  required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control {{ ($errors->has('email') ? 'is-invalid' : '') }}" placeholder="E-mail"  required>
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="tel" id="subject" name="subject" class="form-control {{ ($errors->has('subject') ? 'is-invalid' : '') }}" placeholder="Assunto" required >
                            @if($errors->has('subject'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('subject') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <textarea name="message" name="message" class="form-control" id="message" cols="30" rows="3" placeholder="Mensagem" ></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn contact-one__btn thm-btn">Enviar Mensagem</button>
                        </div>
                        @if(session('mensagem'))
                            <div class="alert alert-success" role="alert">
                                <p>{{session('mensagem')}}</p>
                            </div>
                        @endif
                    </form>
                    <div class="result text-center"></div><!-- /.result -->
                </div><!-- /.become-teacher__form -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.become-teacher -->


@endsection
