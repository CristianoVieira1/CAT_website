@extends('faculdade.master.facu')
@section('content')
    <div class="course-page">
        <div class="container">
            <div class="page-contents">
                <div class="content-details">
                    <h1 id="product-title " class="detail-title ">
                        <span>{{ $educa->titleFirst }}  </span>
                        <strong class="title-size-medium "> {{ $educa->titleSecond }} <span> {{ $educa->titlethird }}</span></strong>
                    </h1>

                    <div class="detail-section ">
                        <div class="section-course-image educa-img"></div>

                        <div class="section-slogan ">
                            <h2 class="slogan-text ">
                                <strong>EAD PLENO Unilins,</strong> O MAIS COMPLETO!<br>
                                <small>O único EAD em que você não depende de internet.</small>
                            </h2>
                        </div>
                        @if(session('mensagem'))
                           <div class="alert alert-success" role="alert">
                            <p>{{session('mensagem')}}</p>
                             </div>
                        @endif



                        <!-- <div id="mobile-buy-panel " class="section-buy-mobile ">
                                                </div> -->
                        <section class="course-price " id="planos">
                            <div class="planos pos-graduacao ">
                                <div class="col-content first ">
                                    <ul class="content-list ">
                                        <li class="list-item ">
                                            <p>Duração</p>
                                        </li>
                                        <li class="list-item ">
                                            <p>Livros impressos e Videoaulas em DVD</p>
                                        </li>
                                        <li class="list-item ">
                                            <p>Livros em PDF e Videoaulas Online</p>
                                        </li>
                                        <li class="list-item ">
                                            <p>Plataforma Online</p>
                                        </li>
                                        <li class="list-item ">
                                            <p>Data de Início</p>
                                        </li>
                                        <li class="list-item "></li>
                                    </ul>
                                </div>
                                <div class="col-content ">
                                    <ul class="content-list ">
                                        <li class="list-item ">
                                            <p>15 meses</p>
                                        </li>
                                        <li class="list-item posGrad ">
                                            <p>
                                                <span class="textMob ">Livros impressos e Videoaulas em DVD</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>
                                                <span class="textMob ">Livros em PDF e Videoaulas Online</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>
                                                <span class="textMob ">Plataforma Online</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>{{ $educa->workloadDate }}</p>
                                        </li>
                                        <li class="list-item ">
                                            <div class="price ">
                                                <sub>R$</sub>
                                                <span>69,90</span>
                                                <sub>/mês</sub>
                                                <p>durante 16 meses</p>
                                            </div>
                                            <div class="btn" edbox data-box-header="INSCREVA-SE" data-box-target=".dif-1">
                                                INSCREVA-SE
                                                <div class="modal dif-1">
                                                    <div class="col-lg-6">
                                                        <div class="become-teacher__form">
                                                            <div class="become-teacher__form-top">
                                                                <h2 class="become-teacher__form-title">
                                                                    Faça sua matricula.
                                                                </h2><!-- /.become-teacher__form-title -->
                                                            </div><!-- /.become-teacher__top -->
                                                            <form action="{{ route('facuMatricula') }}" method="post" autocomplete="off" class="become-teacher__form-content">
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
                                                                    <input type="tel" id="cell" name="cell" class="form-control {{ ($errors->has('cell') ? 'is-invalid' : '') }}" placeholder="Telefone"  required>
                                                                    @if($errors->has('cell'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('cell') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" id="course" name="course" class="form-control {{ ($errors->has('course') ? 'is-invalid' : '') }}" value="{{ $educa->titleSecond }} em 15 meses" placeholder="Assunto" required >
                                                                    @if($errors->has('course'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('course') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <textarea name="message" name="message" class="form-control" id="message" cols="30" rows="3" placeholder="Mensagem" ></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <button type="submit" class="btn contact-one__btn thm-btn">Enviar Mensagem</button>
                                                                </div>

                                                            </form>
                                                            <div class="result text-center"></div><!-- /.result -->
                                                        </div><!-- /.become-teacher__form -->
                                                    </div><!-- /.col-lg-6 -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="melhoropcao ">
                                        <p>Essa é a melhor opção para quem estuda e trabalha!</p>
                                    </div>
                                </div>
                                <div class="col-content highlight ">
                                    <ul class="content-list ">
                                        <li class="list-item ">
                                            <p>15 meses</p>
                                        </li>
                                        <li class="list-item posGrad ">
                                            <p>
                                                <span class="textMob ">Livros impressos e Videoaulas em DVD</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>
                                                <span class="textMob ">Livros em PDF e Videoaulas Online</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>
                                                <span class="textMob ">Plataforma Online</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>{{ $educa->workloadDate }}</p>
                                        </li>
                                        <li class="list-item ">
                                            <div class="price ">
                                                <sub>R$</sub>
                                                <span>89,90</span>
                                                <sub>/mês</sub>
                                                <p>durante 16 meses</p>
                                            </div>
                                            <div class="btn" edbox data-box-header="INSCREVA-SE" data-box-target=".dif-2">
                                                INSCREVA-SE
                                                <div class="modal dif-2">
                                                    <div class="col-lg-6">
                                                        <div class="become-teacher__form">
                                                            <div class="become-teacher__form-top">
                                                                <h2 class="become-teacher__form-title">
                                                                    Faça sua matricula.
                                                                </h2><!-- /.become-teacher__form-title -->
                                                            </div><!-- /.become-teacher__top -->
                                                            <form action="{{ route('facuMatricula') }}" method="post" autocomplete="off" class="become-teacher__form-content">
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
                                                                    <input type="tel" id="cell" name="cell" class="form-control {{ ($errors->has('cell') ? 'is-invalid' : '') }}" placeholder="Telefone"  required>
                                                                    @if($errors->has('cell'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('cell') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" id="course" name="course" class="form-control {{ ($errors->has('course') ? 'is-invalid' : '') }}" value="{{ $educa->titleSecond }} em 15 meses" placeholder="Assunto" required >
                                                                    @if($errors->has('course'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('course') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <textarea name="message" name="message" class="form-control" id="message" cols="30" rows="3" placeholder="Mensagem" ></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <button type="submit" class="btn contact-one__btn thm-btn">Enviar Mensagem</button>
                                                                </div>

                                                            </form>
                                                            <div class="result text-center"></div><!-- /.result -->
                                                        </div><!-- /.become-teacher__form -->
                                                    </div><!-- /.col-lg-6 -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="melhoropcao ">
                                        <p>Essa é a melhor opção para quem estuda e trabalha!</p>
                                    </div>
                                </div>
                                <div class="col-content ">
                                    <ul class="content-list ">
                                        <li class="list-item ">
                                            <p>9 meses</p>
                                        </li>
                                        <li class="list-item posGrad ">
                                            <p>
                                                <span class="textMob ">Livros impressos e Videoaulas em DVD</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>
                                                <span class="textMob ">Livros em PDF e Videoaulas Online</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>
                                                <span class="textMob ">Plataforma Online</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>{{ $educa->workloadDate }}</p>
                                        </li>
                                        <li class="list-item ">
                                            <div class="price ">
                                                <sub>R$</sub>
                                                <span>99,90</span>
                                                <sub>/mês</sub>
                                                <p>durante 10 meses</p>
                                            </div>
                                            <div class="btn" edbox data-box-header="INSCREVA-SE" data-box-target=".dif-3">
                                                INSCREVA-SE
                                                <div class="modal dif-3">
                                                    <div class="col-lg-6">
                                                        <div class="become-teacher__form">
                                                            <div class="become-teacher__form-top">
                                                                <h2 class="become-teacher__form-title">
                                                                    Faça sua matricula.
                                                                </h2><!-- /.become-teacher__form-title -->
                                                            </div><!-- /.become-teacher__top -->
                                                            <form action="{{ route('facuMatricula') }}" method="post" autocomplete="off" class="become-teacher__form-content">
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
                                                                    <input type="tel" id="cell" name="cell" class="form-control {{ ($errors->has('cell') ? 'is-invalid' : '') }}" placeholder="Telefone"  required>
                                                                    @if($errors->has('cell'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('cell') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" id="course" name="course" class="form-control {{ ($errors->has('course') ? 'is-invalid' : '') }}" value="{{ $educa->titleSecond }} em 9 meses" placeholder="Assunto" required >
                                                                    @if($errors->has('course'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('course') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <textarea name="message" name="message" class="form-control" id="message" cols="30" rows="3" placeholder="Mensagem" ></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <button type="submit" class="btn contact-one__btn thm-btn">Enviar Mensagem</button>
                                                                </div>

                                                            </form>
                                                            <div class="result text-center"></div><!-- /.result -->
                                                        </div><!-- /.become-teacher__form -->
                                                    </div><!-- /.col-lg-6 -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="melhoropcao ">
                                        <p>Essa é a melhor opção para quem estuda e trabalha!</p>
                                    </div>
                                </div>
                                <div class="col-content ">
                                    <ul class="content-list ">
                                        <li class="list-item ">
                                            <p>9 meses</p>
                                        </li>
                                        <li class="list-item posGrad ">
                                            <p>
                                                <span class="textMob ">Livros impressos e Videoaulas em DVD</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>
                                                <span class="textMob ">Livros em PDF e Videoaulas Online</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>
                                                <span class="textMob ">Plataforma Online</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>{{ $educa->workloadDate }}</p>
                                        </li>
                                        <li class="list-item ">
                                            <div class="price ">
                                                <sub>R$</sub>
                                                <span>129,90</span>
                                                <sub>/mês</sub>
                                                <p>durante 10 meses</p>
                                            </div>
                                            <div class="btn" edbox data-box-header="INSCREVA-SE" data-box-target=".dif-4">
                                                INSCREVA-SE
                                                <div class="modal dif-4">
                                                    <div class="col-lg-6">
                                                        <div class="become-teacher__form">
                                                            <div class="become-teacher__form-top">
                                                                <h2 class="become-teacher__form-title">
                                                                    Faça sua matricula.
                                                                </h2><!-- /.become-teacher__form-title -->
                                                            </div><!-- /.become-teacher__top -->
                                                            <form action="{{ route('facuMatricula') }}" method="post" autocomplete="off" class="become-teacher__form-content">
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
                                                                    <input type="tel" id="cell" name="cell" class="form-control {{ ($errors->has('cell') ? 'is-invalid' : '') }}" placeholder="Telefone"  required>
                                                                    @if($errors->has('cell'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('cell') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" id="course" name="course" class="form-control {{ ($errors->has('course') ? 'is-invalid' : '') }}" value="{{ $educa->titleSecond }} em 15 meses" placeholder="Assunto" required >
                                                                    @if($errors->has('course'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('course') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <textarea name="message" name="message" class="form-control" id="message" cols="30" rows="3" placeholder="Mensagem" ></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <button type="submit" class="btn contact-one__btn thm-btn">Enviar Mensagem</button>
                                                                </div>

                                                            </form>
                                                            <div class="result text-center"></div><!-- /.result -->
                                                        </div><!-- /.become-teacher__form -->
                                                    </div><!-- /.col-lg-6 -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="melhoropcao ">
                                        <p>Essa é a melhor opção para quem estuda e trabalha!</p>
                                    </div>
                                </div>
                                <div class="col-content ">
                                    <ul class="content-list ">
                                        <li class="list-item ">
                                            <p>6 meses</p>
                                        </li>
                                        <li class="list-item posGrad ">
                                            <p>
                                                <span class="textMob ">Livros impressos e Videoaulas em DVD</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>
                                                <span class="textMob ">Livros em PDF e Videoaulas Online</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>
                                                <span class="textMob ">Plataforma Online</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>{{ $educa->workloadDate }}</p>
                                        </li>
                                        <li class="list-item ">
                                            <div class="price ">
                                                <sub>R$</sub>
                                                <span>189,90</span>
                                                <sub>/mês</sub>
                                                <p>durante 7 meses</p>
                                            </div>
                                            <div class="btn" edbox data-box-header="INSCREVA-SE" data-box-target=".dif-5">
                                                INSCREVA-SE
                                                <div class="modal dif-5">
                                                    <div class="col-lg-6">
                                                        <div class="become-teacher__form">
                                                            <div class="become-teacher__form-top">
                                                                <h2 class="become-teacher__form-title">
                                                                    Faça sua matricula.
                                                                </h2><!-- /.become-teacher__form-title -->
                                                            </div><!-- /.become-teacher__top -->
                                                            <form action="{{ route('facuMatricula') }}" method="post" autocomplete="off" class="become-teacher__form-content">
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
                                                                    <input type="tel" id="cell" name="cell" class="form-control {{ ($errors->has('cell') ? 'is-invalid' : '') }}" placeholder="Telefone"  required>
                                                                    @if($errors->has('cell'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('cell') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" id="course" name="course" class="form-control {{ ($errors->has('course') ? 'is-invalid' : '') }}" value="{{ $educa->titleSecond }} em 6 meses" placeholder="Assunto" required >
                                                                    @if($errors->has('course'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('course') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <textarea name="message" name="message" class="form-control" id="message" cols="30" rows="3" placeholder="Mensagem" ></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <button type="submit" class="btn contact-one__btn thm-btn">Enviar Mensagem</button>
                                                                </div>

                                                            </form>
                                                            <div class="result text-center"></div><!-- /.result -->
                                                        </div><!-- /.become-teacher__form -->
                                                    </div><!-- /.col-lg-6 -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="melhoropcao ">
                                        <p>Essa é a melhor opção para quem estuda e trabalha!</p>
                                    </div>
                                </div>
                                <div class="col-content ">
                                    <ul class="content-list ">
                                        <li class="list-item ">
                                            <p>6 meses</p>
                                        </li>
                                        <li class="list-item posGrad ">
                                            <p>
                                                <span class="textMob ">Livros impressos e Videoaulas em DVD</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>
                                                <span class="textMob ">Livros em PDF e Videoaulas Online</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>
                                                <span class="textMob ">Plataforma Online</span>
                                                <i class="icon-check "></i>
                                            </p>
                                        </li>
                                        <li class="list-item ">
                                            <p>{{ $educa->workloadDate }}</p>
                                        </li>
                                        <li class="list-item ">
                                            <div class="price ">
                                                <sub>R$</sub>
                                                <span>209,90</span>
                                                <sub>/mês</sub>
                                                <p>durante 7 meses</p>
                                            </div>
                                            <div class="btn" edbox data-box-header="INSCREVA-SE" data-box-target=".dif-6">
                                                INSCREVA-SE
                                                <div class="modal dif-6">
                                                    <div class="col-lg-6">
                                                        <div class="become-teacher__form">
                                                            <div class="become-teacher__form-top">
                                                                <h2 class="become-teacher__form-title">
                                                                    Faça sua matricula.
                                                                </h2><!-- /.become-teacher__form-title -->
                                                            </div><!-- /.become-teacher__top -->
                                                            <form action="{{ route('facuMatricula') }}" method="post" autocomplete="off" class="become-teacher__form-content">
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
                                                                    <input type="tel" id="cell" name="cell" class="form-control {{ ($errors->has('cell') ? 'is-invalid' : '') }}" placeholder="Telefone"  required>
                                                                    @if($errors->has('cell'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('cell') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" id="course" name="course" class="form-control {{ ($errors->has('course') ? 'is-invalid' : '') }}" value="{{ $educa->titleSecond }} em 15 meses" placeholder="Assunto" required >
                                                                    @if($errors->has('course'))
                                                                        <div class="invalid-feedback">
                                                                            {{ $errors->first('course') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="form-group">
                                                                    <textarea name="message" name="message" class="form-control" id="message" cols="30" rows="3" placeholder="Mensagem" ></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <button type="submit" class="btn contact-one__btn thm-btn">Enviar Mensagem</button>
                                                                </div>

                                                            </form>
                                                            <div class="result text-center"></div><!-- /.result -->
                                                        </div><!-- /.become-teacher__form -->
                                                    </div><!-- /.col-lg-6 -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="melhoropcao ">
                                        <p>Essa é a melhor opção para quem estuda e trabalha!</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="infos-taxa ">
                            <div class="panel-section panel-obs ">
                                <p>
                                    Este curso tem taxa de adesão no mesmo valor da mensalidade. Os valores podem sofrer alteração sem prévio aviso e serão reajustados anualmente de acordo com índices legais. Consulte condições mínimas para estudo na internet e informações sobre o material.
                                    DVD de dados com videoaulas em formato compatível para uso em computadores e notebooks.
                                </p>
                            </div>
                        </section>

                        <section>
                            <div class="buttons ">
                                <div class="section-mec ">
                                    <a href="#gradecurricular " class="btn linkMec " id="linkGrade ">
                                        <i class="icon-platform "></i>
                                        <span>Grade curricular</span>
                                    </a>
                                    <div class="section-mec ">
                                        <a href="http://emec.mec.gov.br/emec/consulta-cadastro/detalhamento/d96957f455f6405d14c6542552b0f6eb/MTg0Ng==/93916316abe23148507bd4c260e4b878/MTA0NzQ4 " class="btn linkMec " target="_blank ">
                                            <i class="icon-mec "></i>
                                            <span>Cadastro do curso no MEC</span>
                                        </a>
                                    </div>
                                    <div class="section-mec ">
                                        <a href="#objetivo " class="btn btn-objetivo ">
                                            <i class="icon-check "></i>
                                            <span>Objetivo do curso</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <div class="section-thumbs section-methodology ">
                            <div class="thumb ">
                                <figure class="thumb-figure ">
                                    <img class="figure-img " src="{{ url( 'faculdade/assets/images/metodologia-01.png') }} " alt="Metodologia EAD PLeno ">
                                </figure>
                                <div class="thumb-text ">
                                    <i class="icon-next "></i>No EAD Pleno Unilins cada disciplina do curso contém um livro impresso e um DVD com videoaulas;
                                </div>
                            </div>

                            <div class="thumb ">
                                <figure class="thumb-figure ">
                                    <img class="figure-img " src="{{ url( 'faculdade/assets/images/metodologia-02.png') }} " alt="Metodologia EAD PLeno ">
                                </figure>
                                <div class="thumb-text ">
                                    <i class="icon-next "></i>Os livros e as videoaulas também estarão disponíveis para você no formato online;
                                </div>
                            </div>

                            <div class="thumb ">
                                <figure class="thumb-figure ">
                                    <img class="figure-img " src="{{ url( 'faculdade/assets/images/metodologia-03.png') }} " alt="Metodologia EAD PLeno ">
                                </figure>
                                <div class="thumb-text ">
                                    <i class="icon-next "></i>O mesmo autor que escreve o livro, grava as videoaulas e elabora as questões das provas;
                                </div>
                            </div>

                            <div class="thumb ">
                                <figure class="thumb-figure ">
                                    <img class="figure-img " src="{{ url( 'faculdade/assets/images/metodologia-04.png') }} " alt="Metodologia EAD PLeno ">
                                </figure>
                                <div class="thumb-text ">
                                    <i class="icon-next "></i>Isso garante unidade nos conteúdos e um aprendizado livre de dúvidas.
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="detail-title "><strong class="title-size-big ">Conheça o material didático</strong></h2>
                    <div class="detail-section ">
                        <div class="section-carousel owl-carousel owl-theme ">
                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/material-01.png') }} " alt="Material didático ">
                                <div class="text ">Livros impressos, videoaulas em DVD e também online</div>
                            </div>
                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/material-02.png') }} " alt="Material didático ">
                                <div class="text ">O livro é o seu guia na hora de estudar. Os conteúdos dele são organizados em formato de plano de estudos, sempre elencados na ordem exata em que você precisa estudá-los</div>
                            </div>
                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/material-03.png') }} " alt="Material didático ">
                                <div class="text ">Para cada capítulo do livro, há uma videoaula correspondente</div>
                            </div>
                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/material-04.png') }} " alt="Material didático ">
                                <div class="text ">O mesmo conteúdo encontrado no livro está contido nas videoaulas. A melhor forma de estudar fica a sua escolha.</div>
                            </div>
                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/material-05.png') }} " alt="AVA - Ambiente Virtual de Aprendizagem ">
                                <div class="text ">Imagem real dos materiais EAD Pleno Unilins. As disciplinas exibidas podem não fazer parte deste curso.</div>
                            </div>
                        </div>
                    </div>

                    <h2 class="detail-title "><strong class="title-size-big ">Sistema de Avaliações EAD Pleno</strong></h2>
                    <div class="detail-section ">
                        <p class="section-text ">O sistema de avaliação varia de acordo com o curso. Todos os cursos EAD Pleno Unilins contemplam avaliações por disciplina e, além disso, podem haver outros momentos de avaliação, como práticas curriculares, estágios supervisionados,
                            atividades complementares e trabalho de conclusão de curso (TCC).</p>

                        <div class="section-thumbs ">
                            <div class="thumb ">
                                <figure class="thumb-figure ">
                                    <img class="figure-img " src="{{ url( 'faculdade/assets/images/step-01.png') }} " alt="Avaliação - Etapa 1 ">
                                </figure>
                                <div class="thumb-text ">
                                    <i class="icon-next "></i>As avaliações online são feitas no portal AVA. As avaliações presenciais são feitas no polo, mediante agendamento prévio.
                                </div>
                            </div>

                            <div class="thumb ">
                                <figure class="thumb-figure ">
                                    <img class="figure-img " src="{{ url( 'faculdade/assets/images/step-02.png') }} " alt="Avaliação - Etapa 2 ">
                                </figure>
                                <div class="thumb-text ">
                                    <i class="icon-next "></i>O conteúdo que você estuda no livro e nas videoaulas é exatamente o que é cobrado na prova.
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="detail-title "><strong class="title-size-big ">encontro presencial</strong></h2>
                    <div class="detail-section ">
                        <p class="section-text ">
                            O encontro presencial acontece para a realização das atividades avaliativas de cada módulo. Você escolhe a melhor data e então faz o agendamento pelo portal AVA ou pelo telefone. O polo disponibiliza laboratório de informática para uso dos alunos sempre
                            que necessário. Além disso, outros laboratórios didáticos serão disponibilizados no endereço do polo, por meio de convênios ou ainda online de acordo com o previsto no projeto pedagógico de cada curso.
                        </p>

                        <div class="section-thumbs ">
                            <div class="thumb ">
                                <figure class="thumb-figure ">
                                    <img class="figure-img " src="{{ url( 'faculdade/assets/images/step-03.png') }} " alt="Avaliação - Etapa 3 ">
                                </figure>
                                <div class="thumb-text ">
                                    <i class="icon-next "></i>No EAD Pleno Unilins, os alunos têm liberdade para escolher a data do encontro presencial;
                                </div>
                            </div>

                            <div class="thumb ">
                                <figure class="thumb-figure ">
                                    <img class="figure-img " src="{{ url( 'faculdade/assets/images/step-04.png') }} " alt="Avaliação - Etapa 4 ">
                                </figure>
                                <div class="thumb-text ">
                                    <i class="icon-next "></i>Você terá apenas um encontro presencial ao final do curso. </div>
                            </div>
                        </div>
                    </div>


                    <h2 class="detail-title "><strong class="title-size-big ">AVA • Ambiente Virtual de Aprendizagem</strong></h2>
                    <div class="detail-section ">
                        <p class="section-text ">Por meio da internet, você terá à sua disposição um importante recurso tecnológico a ser empregado durante o seu curso, o Portal AVA. Ele é simples, intuitivo e fácil de usar.</p>

                        <div class="section-carousel owl-carousel owl-theme ">
                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/ava-01.jpg') }} " alt="AVA - Ambiente Virtual de Aprendizagem ">
                                <div class="text ">Conheça o AVA do EAD Pleno Unilins;</div>
                            </div>

                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/ava-02.jpg') }} " alt="AVA - Ambiente Virtual de Aprendizagem ">
                                <div class="text ">Nele você acessa as videoaulas e livros em PDF;</div>
                            </div>

                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/ava-03.jpg') }} " alt="AVA - Ambiente Virtual de Aprendizagem ">
                                <div class="text ">Realiza provas online;</div>
                            </div>

                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/ava-04.jpg') }} " alt="AVA - Ambiente Virtual de Aprendizagem ">
                                <div class="text ">Agenda avaliações presenciais;</div>
                            </div>

                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/ava-05.jpg') }} " alt="AVA - Ambiente Virtual de Aprendizagem ">
                                <div class="text ">Acompanha o seu progresso no curso;</div>
                            </div>

                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/ava-06.jpg') }} " alt="AVA - Ambiente Virtual de Aprendizagem ">
                                <div class="text ">Confere as suas notas;</div>
                            </div>

                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/ava-07.jpg') }} " alt="AVA - Ambiente Virtual de Aprendizagem ">
                                <div class="text ">Solicita documentos acadêmicos;</div>
                            </div>

                            <div class="item ">
                                <img class="section-responsive-image " src="{{ url( 'faculdade/assets/images/ava-08.jpg') }} " alt="AVA - Ambiente Virtual de Aprendizagem ">
                                <div class="text ">No EAD Pleno Unilins você tem sempre uma forma prática e rápida de manter contato conosco.</div>
                            </div>

                        </div>
                    </div>


                    <h2 class="detail-title "><strong class="title-size-big ">O QUE EU PRECISO PARA FAZER MINHA MATRÍCULA?</strong></h2>
                    <div class="detail-section ">
                        <ul class="section-topics ">
                            <li class="topic ">
                                <h3>Termo de adesão e declaração de ciência assinados;</h3>
                            </li>
                            <li class="topic ">
                                <h3>Cópia simples do CPF;</h3>
                            </li>
                            <li class="topic ">
                                <h3>Comprovantes de conclusão de Ensino Superior <small>(declaração, diploma, histórico ou atestado emitido pela instituição de ensino de origem);</small></h3>
                            </li>
                            <li class="topic ">
                                <h3>Comprovante de endereço atualizado.</h3>
                            </li>
                        </ul>
                    </div>

                    <h2 id="gradecurricular " class="detail-title "><strong class="title-size-big ">GRADE CURRICULAR</strong></h2>
                    <div class="detail-section ">
                        <div class="container-grade accordion-active ">
                            <div class="heading-semestre ">
                                <p>Semestre 1</p>
                            </div>
                            <div class="container-modulo accordion-active ">
                                <div class="heading-modulo accordion-item-active ">
                                    <p>Módulo 1</p>
                                </div>
                                <div class="container-disciplina ">
                                    <table class="table ">
                                        <tbody>
                                        <tr>
                                            <td>
                                                {{ $educa->a1First }} </td>
                                            <td class="center">{{ $educa->a1FirstHours }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ $educa->a1Second }} </td>
                                            <td class="center">{{ $educa->a1SecondHours }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ $educa->a1Third }} </td>
                                            <td class="center">{{ $educa->a1ThirdHours }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ $educa->a1Four }} </td>
                                            <td class="center">{{ $educa->a1FourHours }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ $educa->a1Fifth }} </td>
                                            <td class="center">{{ $educa->a1FifthHours }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ $educa->a1Sixth }} </td>
                                            <td class="center">{{ $educa->a1SixthHours }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ $educa->a1Seventh }} </td>
                                            <td class="center">{{ $educa->a1SeventhHours }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <table class="table ">
                            <tfoot>
                            <tr>
                                <td>Carga horária total do curso:</td>
                                <td class="center ">
                                    360h
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                        <br>
                        <small>* A matriz curricular pode ser alterada sem aviso prévio.</small>
                    </div>

                    <h2 class="detail-title " id="objetivo "><strong class="title-size-big ">MODALIDADE DE ENSINO</strong></h2>
                    <div class="detail-section objetivo ">
                        <p>Voc ecirc; escolhe a melhor maneira de adaptar sua rotina na hora da matr&iacute;cula. <br /><strong>Online modo</strong> nbsp;de estudo com acesso a v&iacute;deos e livros em PDF via internet. <br /><strong>Online + DVD * + Livros: modo</strong>                        &nbsp;de estudo com acesso a v&iacute;deos e livros em PDF via internet + um DVD de dados com v&iacute;deos + Livros impressos.</p>
                    </div>
                    <h2 class="detail-title " id="objetivo "><strong class="title-size-big ">BASE LEGAL</strong></h2>
                    <div class="detail-section objetivo ">
                        <p><a class="hyperlink " href="{{ url( 'http://arquivoscdn.iesde.com.br/cms_ead/unilins/arquivo/42650/detalhe-1556025404.pdf') }} " target="_blank ">Contrato de Presta&ccedil;&atilde;o de Servi&ccedil;os Educacionais.</a></p>
                    </div>


                    <h2 class="detail-title "><strong class="title-size-big ">o que eu preciso para acessar o curso no computador?</strong></h2>
                    <div class="detail-section ">
                        <div class="section-content-text ">
                            <ul class="section-topics ">
                                <li class="topic ">
                                    <h3>Conexão de banda larga igual ou superior a 5Mbps para uma melhor visualização dos vídeos;</h3>
                                </li>
                                <li class="topic ">
                                    <h3>Plug-in do Adobe Flash Player (se necessitar);</h3>
                                </li>
                                <li class="topic ">
                                    <h3>Windows 7, 8 ou 10 com as atualizações mais recentes instaladas;</h3>
                                </li>
                                <li class="topic ">
                                    <h3>Google Chrome, Firefox, Internet Explorer 10 ou superior;</h3>
                                </li>
                                <li class="topic ">
                                    <h3>Processador 2.33GHz ou superior;</h3>
                                </li>
                                <li class="topic ">
                                    <h3>Memória RAM 4 Gb para WIndows 10, 2Gb para Windows 7 ou superior;</h3>
                                </li>
                                <li class="topic ">
                                    <h3>Placa de vídeo 128 Mb off-board ou on-board;</h3>
                                </li>
                                <li class="topic ">
                                    <h3>HD com 30Gb livres;</h3>
                                </li>
                                <li class="topic ">
                                    <h3>Monitor com resolução 1024x768 pixels.</h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="price-fixed">
    <div class="link">
        <a href="#planos" class="botao btn">
            MATRICULE-SE    </a>
    </div>
</div>


    <div class="text-seo ">
        <div class="container ">
        </div>
    </div>
@endsection
