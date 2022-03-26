@extends('cursos.master.master')
@section('content')
        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active"><a href="{{ route('awards') }}">Premiações</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Premiações</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->

        <section class="card_cat">
            <section class="team-one  ">
                <div class="container">
                    <div class="block-title text-center">
                        <h2 class="block-title__title">Algumas de nossas premiações recebidas!</h2><!-- /.block-title__title -->
                    </div><!-- /.block-title -->

                    @isset($premias)
                    <div class="row">
                        @foreach($premias as $premia)
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="team-one__single">
                                <div class="team-one__image">
                                    <img src="{{ Storage::url($premia->image)}}" alt="">
                                </div><!-- /.team-one__image -->
                                <div class="team-one__content">
                                    <h2 class="team-one__name">{{ $premia->title }}</h2>
                                    <!-- /.team-one__name -->
                                    <p class="team-one__designation">{{ $premia->category }}</p><!-- /.team-one__designation -->
                                    <p class="team-one__text">{{ $premia->about }}</p>
                                    <!-- /.team-one__text -->
                                </div><!-- /.team-one__content -->
                                <div class="team-one__social">
                                    <a href="https://www.facebook.com/catbroficial" TARGET="_blank"><i class="fab fa-facebook-square"></i></a>
                                    <a href=" https://www.instagram.com/catbr.oficial/?hl=pt-br" TARGET="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="{{ url('https://api.whatsapp.com/send?phone=555130858338') }}" TARGET="_blank"><i class="fab fa-whatsapp"></i></a>
                                </div><!-- /.team-one__social -->
                            </div><!-- /.team-one__single -->
                        </div><!-- /.col-lg-3 -->
                        @endforeach
                    </div><!-- /.row -->
                    @endisset
                </div><!-- /.container -->
            </section><!-- /.team-one team-page -->
              </section>

        <section class="become-teacher">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="become-teacher__content">
                            <h2 class="become-teacher__title">Confira um pouco mais sobre algumas de nossas premiações recebidas!</h2><!-- /.become-teacher__title -->
                            <p class="become-teacher__text">Nosso trabalho sério, o respeito aos nossos alunos e clientes, atendimento personalizado, entrega de resultados
                                                            comprovados,<br/> envolvimento de toda equipe em busca de surpreender positivamente a todos os que confiam a nós, sua
                                                            formação ou de suas equipes,<br/> seus serviços e a instalação e manutenção de sua infraestrutura, contribuíram para
                                                            garantir resultados como os prêmios que permearam <br/>nossa história até aqui. Nenhum destes prêmios teriam a mesma <br/>
                                                            importância, se não tivéssemos honrado sempre toda a confiança depositada em nosso trabalho.</p><!-- /.become-teacher__text -->
                            <h2 class="become-teacher__subtitle">Agradecimento</h2><!-- /.become-teacher__subtitle -->
                            <p class="become-teacher__text">Agradecemos a todos <br/>
                                os que fazem parte desta equipe e desta história, por todas as honrarias já recebidas.</p><!-- /.become-teacher__text -->
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
        <section class="cta-one">
            <div class="container">
                <h2 class="cta-one__title">Entre em contato agora mesmo!</h2><!-- /.cta-one__title -->
                <div class="cta-one__btn-block">
                    <a href="{{ url('https://api.whatsapp.com/send?phone=555130858338') }}" target="_blank" class="thm-btn whats"><i class="fab fa-whatsapp"></i> Chama no Whats</a>
                </div><!-- /.cta-one__btn-block -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->
@endsection
