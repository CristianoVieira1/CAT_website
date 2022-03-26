@extends('cursos.master.master')
@section('content')
<section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="active"><a href="{{ route('course') }}">Serviços</a></li>
        </ul><!-- /.list-unstyled -->
        <h2 class="inner-banner__title">Serviços</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->


<section class="course-one course-page">
    <div class="container">
        @isset($servis)
        <div class="row">
            @foreach($servis as $servi)
            <div class="col-lg-4">
                <div class="course-one__single">
                    <div class="course-one__image">
                        <img src="{{ Storage::url($servi->cover)}}" class="cta-three__image" alt="">
                        <i class="fas fa-cogs"></i><!-- /.far fa-heart -->
                    </div><!-- /.course-one__image -->
                    <div class="course-one__content">
                        <h2 class="course-one__title"><a href="{{ route('serviceDetails', $servi->uri) }}">{{ $servi->title }}</a></h2>
                        <!-- /.course-one__title -->

                        <a href="{{ route('serviceDetails', $servi->uri) }}" class="course-one__link">Visualizar</a>
                    </div><!-- /.course-one__content -->
                </div><!-- /.course-one__single -->
            </div><!-- /.col-lg-4 -->

            @endforeach

        </div><!-- /.row -->

        @endisset

    </div><!-- /.container -->
</section><!-- /.course-one course-page -->

<section class="cta-one">
    <div class="container">
        <h2 class="cta-one__title">Entre em contato agora mesmo!</h2><!-- /.cta-one__title -->
        <div class="cta-one__btn-block">
                    <a href="{{ url('https://api.whatsapp.com/send?phone=555130858338') }}" target="_blank" class="thm-btn whats"><i class="fab fa-whatsapp"></i> Chama no Whats</a>
                </div><!-- /.cta-one__btn-block -->
    </div><!-- /.container -->
</section><!-- /.cta-one -->
@endsection
