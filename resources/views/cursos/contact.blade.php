@extends('cursos.master.master')
@section('content')
<section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="active"><a href="{{ route('contact') }}">Contato</a></li>
        </ul><!-- /.list-unstyled -->
        <h2 class="inner-banner__title">Contato</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="contact-info-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 height_contact">
                <div class="contact-info-one__single wow fadeInDown" data-wow-duration="1500ms">
                    <div class="contact-info-one__icon"><i class="fal fa-school"></i>
                    </div><!-- /.contact-info-one__icon -->
                    <h2 class="contact-info-one__title">Sobre nós </h2><!-- /.contact-info-one__title -->
                    <p class="contact-info-one__text"> Reconhecimento das maiores empresas de telecomunicações do país...</p><!-- /.contact-info-one__text -->
                </div><!-- /.contact-info-one__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="contact-info-one__single wow fadeInUp" data-wow-duration="1500ms">
                    <div class="contact-info-one__icon"><i class="fal fa-map-marker-alt"></i>
                        <!-- /.kipso-icon-manager -->
                    </div><!-- /.contact-info-one__icon -->
                    <h2 class="contact-info-one__title">
                        Nosso endereço</h2><!-- /.contact-info-one__title -->
                    <p class="contact-info-one__text">Rua 25 de julho nº305, <br>
                         Porto Alegre, RS <br> Brasil</p><!-- /.contact-info-one__text -->
                </div><!-- /.contact-info-one__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="contact-info-one__single wow fadeInDown" data-wow-duration="1500ms">
                    <div class="contact-info-one__icon"><i class="fal fa-phone-rotary"></i>
                    </div><!-- /.contact-info-one__icon -->
                    <h2 class="contact-info-one__title">Contato</h2><!-- /.contact-info-one__title -->
                        <a class="contact-info-one__text" href="mailto:{{ env('MAIL_FROM_ADDRESS') }}"><p>{{ setting('site.email_contact') }}</p></a>
                        {{ setting('site.phone_course') }} <br> &nbsp; </p><!-- /.contact-info-one__text -->
                </div><!-- /.contact-info-one__single -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-info-one -->

@include('cursos.includes.form')

<iframe src="{{ url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109298.31969034066!2d-51.250642427069444!3d-30.115082892446647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951979de28545a47%3A0x9da902b503eb15bc!2sCAT%20-%20Centro%20de%20Aperfei%C3%A7oamento%20Tecnol%C3%B3gico!5e0!3m2!1spt-BR!2sbr!4v1598132981443!5m2!1spt-BR!2sbr') }}" class="google-map__contact" allowfullscreen></iframe>
@endsection
