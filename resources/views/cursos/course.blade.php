@extends('cursos.master.master')
@section('content')
<section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="active"><a href="{{ route('course') }}">Treinamentos</a></li>
        </ul><!-- /.list-unstyled -->
        <h2 class="inner-banner__title">Treinamentos</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->


<section class="course-one course-page">
    <div class="container">
        @isset($posts)
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-4">
                <div class="course-one__single">
                    <div class="course-one__image">
                        <img src="{{ Storage::url($post->cover)}}" alt="">
                        <i class="fas fa-graduation-cap"></i><!-- /.far fa-heart -->
                    </div><!-- /.course-one__image -->
                    <div class="course-one__content">
                        <a href="{{ route('details', $post->uri) }}" class="course-one__category">{{ $post->category }}</a><!-- /.course-one__category -->
                        <h2 class="course-one__title"><a href="{{ route('details', $post->uri) }}">{{ $post->uri }}</a></h2>
                        <!-- /.course-one__title -->

                        <div class="course-one__meta">
                            <a href="{{ route('details', $post->uri) }}"><i class="far fa-clock"></i>{{ $post->Workload }}</a>
                        </div><!-- /.course-one__meta -->
                        <a href="{{ route('details', $post->uri) }}" class="course-one__link">Visualizar</a>
                    </div><!-- /.course-one__content -->
                </div><!-- /.course-one__single -->
            </div><!-- /.col-lg-4 -->

            @endforeach

        </div><!-- /.row -->

        @endisset
{{--        <div class="post-pagination">--}}
{{--            <a href="#"><i class="fa fa-angle-double-left"></i><!-- /.fa fa-angle-double-left --></a>--}}
{{--            <a class="active" href="#">1</a>--}}
{{--            <a href="#">2</a>--}}
{{--            <a href="#">3</a>--}}
{{--            <a href="#">4</a>--}}
{{--            <a href="#"><i class="fa fa-angle-double-right"></i><!-- /.fa fa-angle-double-left --></a>--}}
{{--        </div><!-- /.post-pagination -->--}}

    </div><!-- /.container -->
</section><!-- /.course-one course-page -->

<section class="cta-one">
    <div class="container">
        <h2 class="cta-one__title">Entre em contato agora mesmo!</h2><!-- /.cta-one__title -->
        <div class="cta-one__btn-block">
            <a href="{{ url('https://api.whatsapp.com/send?phone=55513058338') }}" target="_blank" class="thm-btn whats"><i class="fab fa-whatsapp"></i> Chama no Whats</a>
        </div><!-- /.cta-one__btn-block -->
    </div><!-- /.container -->
</section><!-- /.cta-one -->
@endsection
