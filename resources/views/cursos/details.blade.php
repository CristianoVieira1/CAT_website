@extends('cursos.master.master')
@section('content')
<section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">{{ $post->uri }}</a></li>
        </ul><!-- /.list-unstyled -->
        <h2 class="inner-banner__title">{{ $post->uri }}</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="cta-three sem_marg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 clearfix">
                <img src="{{ Storage::url($post->cover)}}" class="cta-three__image" alt={{ $post->uri }}>
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="cta-three__content">
                    <div class="block-title text-left">
                        <h2 class=" title_course">{{ $post->title }}</h2>
                        <!-- /.block-title__title -->
                    </div>
                    </div>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section class="course-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="course-details__content">
                    <p class="course-details__author">
                    <div class="course-details__top">
                        <div class="course-details__top-left">
                            <!-- /.course-details__title -->
                        </div><!-- /.course-details__top-left -->
                    </div><!-- /.course-details__top -->
                    <div class="course-one__image">
                        <img src="assets/images/course-d-1.jpg" alt="">
                    </div><!-- /.course-one__image -->

                    <ul class="course-details__tab-navs list-unstyled nav nav-tabs" role="tablist">
                        <li>
                            <a class="active" role="tab" data-toggle="tab" href="#overview">Descrição</a>
                        </li>
                        <li>
                            <a class="" role="tab" data-toggle="tab" href="#curriculum">Sobre</a>
                        </li>
                        <li>
                            <a class="" role="tab" data-toggle="tab" href="#review">Contato</a>
                        </li>
                    </ul><!-- /.course-details__tab-navs list-unstyled -->
                    <div class="tab-content course-details__tab-content ">
                        <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                            <p>{{ $post->description }}</p>


                        </div><!-- /.course-details__tab-content -->
                        <div class="tab-pane  animated fadeInUp" role="tabpanel" id="curriculum">
                            <h3 class="course-details__tab-title">Sobre</h3>
                            <!-- /.course-details__title -->
                            <br>
                            <p class="course-details__tab-text">{{ $post->aboutCourse }}</p>
                            <!-- /.course-details__tab-text -->
                            <br>

                        </div><!-- /.course-details__tab-content -->
                        <div class="tab-pane  animated fadeInUp" role="tabpanel" id="review">
                            <div class="row">
                                <div class="col-xl-7 d-flex">

                                </div><!-- /.col-lg-8 -->

                            </div><!-- /.row -->
                            <form action="{{ route('sendEmail') }}" method="post" autocomplete="off" class="course-details__comment-form">
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
                                    <textarea name="message" name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Mensagem" ></textarea>
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
                        </div><!-- /.course-details__tab-content -->
                    </div><!-- /.tab-content -->
{{--                    <div class="col-12">--}}
{{--                        <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5" data-width=""></div>--}}
{{--                    </div>--}}
                </div><!-- /.course-details__content -->
            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">

                <div class="course-details__meta">
                    <a href="#" class="course-details__meta-link">
                        <span class="course-details__meta-icon">
                            <i class="far fa-clock"></i><!-- /.far fa-clock -->
                        </span><!-- /.course-details__icon -->
                        Carga Horária: <span>{{ $post->Workload }}</span>
                    </a><!-- /.course-details__meta-link -->
                    <a href="#" class="course-details__meta-link">
                        <span class="course-details__meta-icon">
                            <i class="far fa-folder-open"></i><!-- /.far fa-folder-open -->
                        </span><!-- /.course-details__icon -->
                        Horários: <span>{{ $post->hours }}</span>
                    </a><!-- /.course-details__meta-link -->
                    <a href="#" class="course-details__meta-link">
                        <span class="course-details__meta-icon">
                            <i class="far fa-user-circle"></i><!-- /.far fa-user-circle -->
                        </span><!-- /.course-details__icon -->
                        Turmas: <span>{{ $post->groups }}</span>
                    </a><!-- /.course-details__meta-link -->
                    <a href="#" class="course-details__meta-link">
                        <span class="course-details__meta-icon">
                            <i class="fas fa-play"></i><!-- /.fas fa-play -->
                        </span><!-- /.course-details__icon -->
                        Pré-requisitos: <span>{{ $post->prerequisites }}</span>
                    </a><!-- /.course-details__meta-link -->
                </div>

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</section><!-- /.course-details -->

<section class="cta-one">
    <div class="container">
        <h2 class="cta-one__title">Entre em contato agora mesmo!</h2><!-- /.cta-one__title -->
        <div class="cta-one__btn-block">
            <a href="https://api.whatsapp.com/send?phone=55513058338" target="_blank" class="thm-btn whats"><i class="fab fa-whatsapp"></i> Chama no Whats</a>
        </div><!-- /.cta-one__btn-block -->
    </div><!-- /.container -->
</section><!-- /.cta-one -->
@endsection

