@extends('faculdade.master.facu')
@section('content')
    <div class="course-page">
        <div class="container">
            <div class="page-contents">
                <div class="content-details">
                    <h1 id="product-title" class="detail-title">
                        <span>Curso de Extensão à distância (EAD)  </span>
                        <strong class="title-size-big"> {{ $exten->titleCourse   }} <span>{{$exten->titleSecond }}</span></strong>
                    </h1>

                    <div class="detail-section">
                        <div class="section-course-image extencao-img"></div>
                        @if(session('mensagem'))
                        <div class="alert alert-success" role="alert">
                            <p>{{session('mensagem')}}</p>
                        </div>
                    @endif

                        <div class="section-slogan">
                            <h2 class="slogan-text">
                                <strong>EAD PLENO Unilins,</strong> O MAIS COMPLETO!<br>
                            </h2>
                        </div>
                        <section class="course-price" id="planos">
                            <div class="planos ">
                                <div class="col-content first">
                                    <ul class="content-list">
                                        <li class="list-item">
                                            <p>Duração</p>
                                        </li>
                                        <li class="list-item">
                                            <p>Livros impressos e Videoaulas em DVD</p>
                                        </li>
                                        <li class="list-item">
                                            <p>Livros em PDF e Videoaulas Online</p>
                                        </li>
                                        <li class="list-item">
                                            <p>Plataforma Online</p>
                                        </li>
                                        <li class="list-item">
                                            <p>Data de Início</p>
                                        </li>
                                        <li class="list-item"></li>
                                    </ul>
                                </div>
                                <div class="col-content">
                                    <ul class="content-list">
                                        <li class="list-item">
                                            <p>1 mês</p>
                                        </li>
                                        <li class="list-item ">
                                        </li>
                                        <li class="list-item">
                                            <p>
                                                <span class="textMob">Livros em PDF e Videoaulas Online</span>
                                                <i class="icon-check"></i>
                                            </p>
                                        </li>
                                        <li class="list-item">
                                            <p>
                                                <span class="textMob">Plataforma Online</span>
                                                <i class="icon-check"></i>
                                            </p>
                                        </li>
                                        <li class="list-item">
                                            <p>{{ $exten->workloadDate }}</p>
                                        </li>
                                        <li class="list-item">
                                            <div class="price">
                                                <sub>R$</sub>
                                                <span>{{ $exten->investtmentFirst }}</span>
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
                                                                    <input type="text" id="course" name="course" class="form-control {{ ($errors->has('course') ? 'is-invalid' : '') }}" value="{{ $exten->titleCourse }} em 1 mês" placeholder="Assunto" required >
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
                                    <div class="melhoropcao">
                                        <p>Essa é a melhor opção para quem estuda e trabalha!</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section>
                            <div class="buttons">
                                <div class="section-mec">
                                    <a href="#gradecurricular" class="btn linkMec" id="linkGrade">
                                        <i class="icon-platform"></i>
                                        <span>Grade curricular</span>
                                    </a>
                                    <div class="section-mec">
                                        <a href="" class="btn linkMec" target="_blank">
                                            <i class="icon-mec"></i>
                                            <span>Cadastro do curso no MEC</span>
                                        </a>
                                    </div>
                                    <div class="section-mec">
                                        <a href="#objetivo" class="btn btn-objetivo">
                                            <i class="icon-check"></i>
                                            <span>Objetivo do curso</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>



                    <h2 class="detail-title"><strong class="title-size-big">AVA • Ambiente Virtual de Aprendizagem</strong></h2>
                    <div class="detail-section">
                        <p class="section-text">Por meio da internet, você terá à sua disposição um importante recurso tecnológico a ser empregado durante o seu curso, o Portal AVA. Ele é simples, intuitivo e fácil de usar.</p>

                        <div class="section-carousel owl-carousel owl-theme">
                            <div class="item">
                                <img class="section-responsive-image" src="{{ url('faculdade/assets/images/ava-01.jpg') }}" alt="AVA - Ambiente Virtual de Aprendizagem">
                                <div class="text">Conheça o AVA do EAD Pleno Unilins;</div>
                            </div>

                            <div class="item">
                                <img class="section-responsive-image" src="{{ url('faculdade/assets/images/ava-02.jpg') }}" alt="AVA - Ambiente Virtual de Aprendizagem">
                                <div class="text">Nele você acessa as videoaulas e livros em PDF;</div>
                            </div>

                            <div class="item">
                                <img class="section-responsive-image" src="{{ url('faculdade/assets/images/ava-03.jpg') }}" alt="AVA - Ambiente Virtual de Aprendizagem">
                                <div class="text">Realiza provas online;</div>
                            </div>


                            <div class="item">
                                <img class="section-responsive-image" src="{{ url('faculdade/assets/images/ava-04.jpg') }}" alt="AVA - Ambiente Virtual de Aprendizagem">
                                <div class="text">Confere as suas notas;</div>
                            </div>

                            <div class="item">
                                <img class="section-responsive-image" src="{{ url('faculdade/assets/images/ava-05.jpg') }}" alt="AVA - Ambiente Virtual de Aprendizagem">
                                <div class="text">Solicita documentos acadêmicos;</div>
                            </div>

                            <div class="item">
                                <img class="section-responsive-image" src="{{ url('faculdade/assets/images/ava-06.jpg') }}" alt="AVA - Ambiente Virtual de Aprendizagem">
                                <div class="text">No EAD Pleno Unilins você tem sempre uma forma prática e rápida de manter contato conosco.</div>
                            </div>

                        </div>
                    </div>



                    <h2 id="gradecurricular" class="detail-title"><strong class="title-size-big">GRADE CURRICULAR</strong></h2>
                    <div class="detail-section">
                        <div class="container-grade accordion-active">
                            <div class="heading-semestre">
                                <p>-</p>
                            </div>
                            <div class="container-modulo accordion-active">
                                <div class="heading-modulo accordion-item-active">
                                    <p>-</p>
                                </div>
                                <div class="container-disciplina">
                                    <table class="table">
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="container-grade accordion-active">
                            <div class="heading-semestre">
                                <p>-</p>
                            </div>
                            <div class="container-modulo accordion-active">
                                <div class="heading-modulo accordion-item-active">
                                    <p>-</p>
                                </div>
                                <div class="container-disciplina">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                {{ $exten->a1First }}</td>
                                            <td class="center">{{ $exten->a1FirstHours }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <tfoot>
                            <tr>
                                <td>{{ $exten->totalFirst }}</td>
                                <td class="center">
                                    {{ $exten->totalSecondHours }}
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                        <br>
                        <small>* A matriz curricular pode ser alterada sem aviso prévio.</small>
                    </div>

                    <h2 class="detail-title" id="objetivo"><strong class="title-size-big">Sobre o curso</strong></h2>
                    <div class="detail-section objetivo">
                        <p>{{ $exten->detailsCourse }}</p>
                    </div>


                    <h2 class="detail-title"><strong class="title-size-big">o que eu preciso para acessar o curso no computador?</strong></h2>
                    <div class="detail-section">
                        <div class="section-content-text">
                            <ul class="section-topics">
                                <li class="topic">
                                    <h3>Conexão de banda larga igual ou superior a 5Mbps para uma melhor visualização dos vídeos;</h3>
                                </li>
                                <li class="topic">
                                    <h3>Plug-in do Adobe Flash Player (se necessitar);</h3>
                                </li>
                                <li class="topic">
                                    <h3>Windows 7, 8 ou 10 com as atualizações mais recentes instaladas;</h3>
                                </li>
                                <li class="topic">
                                    <h3>Google Chrome, Firefox, Internet Explorer 10 ou superior;</h3>
                                </li>
                                <li class="topic">
                                    <h3>Processador 2.33GHz ou superior;</h3>
                                </li>
                                <li class="topic">
                                    <h3>Memória RAM 4 Gb para WIndows 10, 2Gb para Windows 7 ou superior;</h3>
                                </li>
                                <li class="topic">
                                    <h3>Placa de vídeo 128 Mb off-board ou on-board;</h3>
                                </li>
                                <li class="topic">
                                    <h3>HD com 30Gb livres;</h3>
                                </li>
                                <li class="topic">
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
                INSCREVA-SE    </a>
        </div>
    </div>

@endsection
