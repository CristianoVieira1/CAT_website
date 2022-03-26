@extends('faculdade.master.facu')
@section('content')
<div class="showcase">
    <div class="showcase-advertising">
        <div class="container">
            <div class="advertising-contents">
                <div class="content-details">
                    <p class="details-title h1"><span>GRADUAÇÃO EAD PLENO</span>ONDE A QUALIDADE CUSTA MENOS!</p>
                    <ul class="details-list">
                        <li>
                            <div class="wrap">
                                <img src="{{ URL::asset('faculdade/assets/images/icon-1.svg') }}" class="icon" /> Melhor relação custo/benefício
                            </div>
                        </li>
                        <li>
                            <div class="wrap">
                                <img src="{{ URL::asset('faculdade/assets/images/icon-2.svg') }}" class="icon" /> Material didático de alto padrão
                            </div>
                        </li>
                        <li>
                            <div class="wrap">
                                <img src= "{{ URL::asset('faculdade/assets/images/icon-3.svg') }}" class="icon" /> Livros impressos incluídos no valor das mensalidades
                            </div>
                        </li>
                        <li>
                            <div class="wrap">
                                <img src="{{ URL::asset('faculdade/assets/images/icon-4.svg') }}" class="icon" /> Plataforma digital simplificada
                            </div>
                        </li>
                    </ul>
                    <!-- <img class="relogio" src="/img/relogio.png" alt=""> -->
                </div>

                <div class="content-seal">
                    <img src="{{ URL::asset('faculdade/assets/images/mec_seal_mini.png') }}" alt="Centro Universitário credenciado pelo MEC">
                </div>
            </div>
        </div>
    </div>

    <div class="showcase-module admaiora">
        <div class="container">
            <img src="{{ URL::asset('faculdade/assets/images/admaiorasemper.png') }}" alt="Ad maiora semper!" class="admaiora">
        </div>
    </div>

    <div class="showcase-module">
        <div class="container">
            <a id="ancora" href="#graduacao">CLIQUE E CONFIRA OS VALORES DAS MENSALIDADES</a>
        </div>
    </div>

    <div class="showcase-actions">
        <div class="container">
            <div class="item" edbox data-box-header="EAD Pleno, o mais completo!" data-box-target=".dif-1">
                <i class="item-icon icon-ead"></i>
                <div class="item-title">
                    <strong>EAD Pleno</strong>
                    <small>O mais completo</small>
                </div>
                <div class="modal modal-container text dif-1">
                    <p>
                        Aqui você conta com a mais completa metodologia em Graduação EAD, você irá estudar com livros impressos, videoaulas em DVD e também online. E mais, o autor que escreve os livros impressos é o mesmo que grava as videoaulas e elabora as questões das provas.
                    </p>
                    <p>
                        Os recursos didáticos são de fácil leitura e entendimento e são elaborados de forma a eliminar as dúvidas. E mais, bastam dois encontros presenciais por semestre, na Graduação, para você cumprir com todas as obrigações acadêmicas. Você também conta com
                        uma equipe especializada em suporte acadêmico para te auxiliar em todas as suas necessidades.
                    </p>
                    <p>
                        O EAD Pleno é o melhor porque é o mais completo.
                    </p>
                </div>
            </div>

            <div class="item" edbox data-box-header="Livros impressos e videoaulas em DVD" data-box-target=".dif-2">
                <i class="item-icon icon-books-dvd"></i>
                <div class="item-title">
                    <strong>Livros impressos e<br>videoaulas em DVD</strong>
                    <small>e também online</small>
                </div>
                <div class="modal modal-container text dif-2">
                    <figure>
                    <img src="{{ URL::asset('faculdade/assets/images/composicao-livros-dvds.png') }}" alt="Livros impressos e videoaulas em DVD">
                    </figure>
                    <p>
                        No EAD Pleno Unilins cada disciplina do curso contém um livro impresso e um DVD com videoaulas. O livro é o seu guia na hora de estudar, os conteúdos estão organizados em formato de plano de estudos, sempre elencados na ordem exata em que você deve estudar.
                        O mesmo conteúdo do livro está contido nas videoaulas, a melhor forma para estudar fica a sua escolha.
                    </p>
                </div>
            </div>

            <div class="item" edbox data-box-header="Ambiente Virtual de Aprendizagem" data-box-target=".dif-3">
                <i class="item-icon icon-ava"></i>
                <div class="item-title">
                    <strong>Ambiente Virtual<br>de Aprendizagem</strong>
                    <small>O melhor e mais adequado</small>
                </div>
                <div class="modal modal-container text dif-3">
                    <p>
                        Por meio da internet, você terá à sua disposição um importante recurso tecnológico a ser empregado durante o seu curso, o Portal AVA. Ele é simples, intuitivo e fácil de usar. Nele você:
                    </p>
                    <ul class="text-listing">
                        <li>Acessa as videoaulas e livros em PDF;</li>
                        <li>Realiza provas online;</li>
                        <li>Agenda avaliações presenciais;</li>
                        <li>Acompanha o seu progresso no curso;</li>
                        <li>Confere as suas notas;</li>
                        <li>Solicita documentos acadêmicos;</li>
                        <li>E mantém contato conosco.</li>
                    </ul>
                </div>
            </div>
            <div class="item" edbox data-box-header="Centro Universitário credenciado pelo MEC" data-box-target=".dif-4">
                <i class="item-icon icon-mec"></i>
                <div class="item-title">
                    <strong>Centro Universitário</strong>
                    <small>Credenciado em EAD<br> pelo MEC</small>
                </div>
                <div class="modal modal-container text dif-4">
                    <p>
                        O Centro Universitário CAT-Unilins é credenciado no MEC para oferta de Graduação e Pós-Graduação na modalidade EAD sob a <a href="http://emec.mec.gov.br/emec/consulta-cadastro/detalhamento/d96957f455f6405d14c6542552b0f6eb/MTg0Ng=="
                                                                                                                                                class="hyperlink" target="_blank" rel="noopener">Portaria Nº 288/2017</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="courses-home">


    <!-- DESTAQUES GRADUACAO -->

    <!-- LISTA GRADUACAO -->
    <section class="section section-courses" id="graduacao">
        <div class="container">
            <h2 class="centered-heading">Centro Universitário Unilins – <strong>Cursos de Graduação a Distância</strong></h2>




            <div id="bacharelado" class="courses-list-areas">
                <h3 class="area-name-heading">
                    <i class="heading-icon icon-next"></i>
                    <span class="heading-label">Bacharelado</span>
                </h3>
                <div class="courses-list cabecalho">
                    <div class="wrapper">
                        <div class="item">
                            <div class="name">
                                <div>CURSO</div>
                            </div>
                            <div class="duracao">
                                <div>DURAÇÃO</div>
                            </div>
                            <div class="investimento">
                                <div>INVESTIMENTO</div>
                            </div>
                            <div class="carga">
                                <div>CARGA HORÁRIA</div>
                            </div>
                            <div class="inicio">
                                <div>DATA DE INÍCIO</div>
                            </div>
                        </div>
                    </div>
                </div>


                @isset($bachas)
                <div class="courses-list">
                        @foreach($bachas as $bacha)
                    <div class="wrapper">
                        <a href="{{ route('facuBachas', $bacha->uri) }}" class="item link-inteiro" title="{{ $bacha->titleCourse }}">
                            <!--JL-->

                            <h4 class="course-name">
                                <div>
                                    {{ $bacha->titleCourse }}
                                    <!--JL-->

                                </div>
                            </h4>
                            <div class="detail detail-duracao">
                                <div>
                                    <p class="textMob">Duração</p>
                                    {{ $bacha->courseDurationFirst }}<small>ou</small>{{ $bacha->courseDurationSecond }} </div>
                            </div>
                            <div class="detail detail-investimento">
                                <div>
                                    <p class="textMob">Investimento</p>
                                    <!--JL-->
                                    <!-- <small>Mensalidade</small> -->
                                    {{ $bacha->investmentFirst }} <small>ou</small>
                                    <!-- <small>Mensalidade</small> -->
                                    {{ $bacha->investmentSecond }} </div>
                            </div>
                            <div class="detail detail-carga">
                                <div>
                                    <p class="textMob">Carga Horária</p>
                                    {{ $bacha->workload }} </div>
                            </div>

                            <div class="detail detail-inicio">
                                <div>
                                    <p class="textMob">Data de Início</p>
                                    {{ $bacha->workloadDate }}  </div>
                            </div>
                        </a>
                        <!--JL-->
                        <a href="{{ route('facuBachas', $bacha->uri) }}" class="register" title="{{ $bacha->titleCourse }}">
                            <div class="wrapper">SAIBA MAIS</div>
                        </a>
                        <a href="https://emec.mec.gov.br/emec/consulta-cadastro/detalhamento/d96957f455f6405d14c6542552b0f6eb/MTg0Ng==/c1b85ea4d704f246bcced664fdaeddb6/QURNSU5JU1RSQcfDTw==" class="register mec linkMec" target="_blank">
                            <div class="wrapper">
                                <i class="icon-mec"></i>
                                <span>Cadastro no MEC</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endisset
            </div>



            <div id="licenciatura" class="courses-list-areas">
                <h3 class="area-name-heading">
                    <i class="heading-icon icon-next"></i>
                    <span class="heading-label">Licenciatura</span>
                </h3>
                <div class="courses-list cabecalho">
                    <div class="wrapper">
                        <div class="item">
                            <div class="name">
                                <div>CURSO</div>
                            </div>
                            <div class="duracao">
                                <div>DURAÇÃO</div>
                            </div>
                            <div class="investimento">
                                <div>INVESTIMENTO</div>
                            </div>
                            <div class="carga">
                                <div>CARGA HORÁRIA</div>
                            </div>
                            <div class="inicio">
                                <div>DATA DE INÍCIO</div>
                            </div>
                        </div>
                    </div>
                </div>
                @isset($licens)
                <div class="courses-list">
                    @foreach($licens as $licen)
                    <div class="wrapper">
                        <a href="{{ route('facuLicens', $licen->uri) }}" class="item link-inteiro" title="{{ $licen->titleCourse }}">
                            <!--JL-->

                            <h4 class="course-name">
                                <div>
                                {{ $licen->titleCourse }}
                                <!--JL-->

                                </div>
                            </h4>
                            <div class="detail detail-duracao">
                                <div>
                                    <p class="textMob">Duração</p>
                                    {{ $licen->courseDurationFirst }}<small>ou</small>{{ $licen->courseDurationSecond }} </div>
                            </div>
                            <div class="detail detail-investimento">
                                <div>
                                    <p class="textMob">Investimento</p>
                                    <!--JL-->
                                    <!-- <small>Mensalidade</small> -->
                                    {{ $licen->investmentFirst }} <small>ou</small>
                                    <!-- <small>Mensalidade</small> -->
                                    {{ $licen->investmentSecond }} </div>
                            </div>
                            <div class="detail detail-carga">
                                <div>
                                    <p class="textMob">Carga Horária</p>
                                    {{ $licen->workload }} </div>
                            </div>

                            <div class="detail detail-inicio">
                                <div>
                                    <p class="textMob">Data de Início</p>
                                    {{ $licen->workloadDate }}  </div>
                            </div>
                        </a>
                        <!--JL-->
                        <a href="{{ route('facuLicens', $licen->uri) }}" class="register" title="{{ $licen->titleCourse }}">
                            <div class="wrapper">SAIBA MAIS</div>
                        </a>
                        <a href="https://emec.mec.gov.br/emec/consulta-cadastro/detalhamento/d96957f455f6405d14c6542552b0f6eb/MTg0Ng==/c1b85ea4d704f246bcced664fdaeddb6/QVJURVM=" class="register mec linkMec" target="_blank">
                            <div class="wrapper">
                                <i class="icon-mec"></i>
                                <span>Cadastro no MEC</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endisset
            </div>

            <div id="tecnologia" class="courses-list-areas">
                <h3 class="area-name-heading">
                    <i class="heading-icon icon-next"></i>
                    <span class="heading-label">Tecnologia</span>
                </h3>
                <div class="courses-list cabecalho">
                    <div class="wrapper">
                        <div class="item">
                            <div class="name">
                                <div>CURSO</div>
                            </div>
                            <div class="duracao">
                                <div>DURAÇÃO</div>
                            </div>
                            <div class="investimento">
                                <div>INVESTIMENTO</div>
                            </div>
                            <div class="carga">
                                <div>CARGA HORÁRIA</div>
                            </div>
                            <div class="inicio">
                                <div>DATA DE INÍCIO</div>
                            </div>
                        </div>
                    </div>
                </div>
                @isset($tecnos)
                <div class="courses-list">
                    @foreach($tecnos as $tecno)
                    <div class="wrapper">
                        <a href="{{ route('facuTecnos', $tecno->uri) }}" class="item link-inteiro" title="{{ $tecno->titleCourse }}">
                            <!--JL-->

                            <h4 class="course-name">
                                <div>
                                {{ $tecno->titleCourse }}
                                <!--JL-->

                                </div>
                            </h4>
                            <div class="detail detail-duracao">
                                <div>
                                    <p class="textMob">Duração</p>
                                    {{ $tecno->courseDurationFirst }}<small>ou</small>{{ $tecno->courseDurationSecond }} </div>
                            </div>
                            <div class="detail detail-investimento">
                                <div>
                                    <p class="textMob">Investimento</p>
                                    <!--JL-->
                                    <!-- <small>Mensalidade</small> -->
                                    {{ $tecno->investmentFirst }} <small>ou</small>
                                    <!-- <small>Mensalidade</small> -->
                                    {{ $tecno->investmentSecond }} </div>
                            </div>
                            <div class="detail detail-carga">
                                <div>
                                    <p class="textMob">Carga Horária</p>
                                    {{ $tecno->workload }} </div>
                            </div>

                            <div class="detail detail-inicio">
                                <div>
                                    <p class="textMob">Data de Início</p>
                                    {{ $tecno->workloadDate }}  </div>
                            </div>
                        </a>
                        <!--JL-->
                        <a href="{{ route('facuTecnos', $tecno->uri) }}" class="register" title="{{ $tecno->titleCourse }}">
                            <div class="wrapper">SAIBA MAIS</div>
                        </a>
                        <a href="https://emec.mec.gov.br/emec/consulta-cadastro/detalhamento/d96957f455f6405d14c6542552b0f6eb/MTg0Ng==/c1b85ea4d704f246bcced664fdaeddb6/QVJURVM=" class="register mec linkMec" target="_blank">
                            <div class="wrapper">
                                <i class="icon-mec"></i>
                                <span>Cadastro no MEC</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endisset
            </div>

        </div>

        <p class="advise">
            *Valores promocionais para o site EAD Pleno UNILINS (unilinsead.com.br)
        </p>
    </section>

    <!-- DESTAQUES POS -->

    <!-- LISTA POS -->
    <section class="section section-courses" id="posGraduacao">
        <div class="container">
            <h2 class="centered-heading">Pós-graduação a distância (EAD) – <strong>Cursos de Especialização</strong></h2>


            <div id="educacao" class="courses-list-areas">
                <h3 class="area-name-heading">
                    <i class="heading-icon icon-next"></i>
                    <span class="heading-label">Educação</span>
                </h3>
                <div class="courses-list cabecalho-pos">
                    <div class="wrapper">
                        <div class="item">
                            <div class="name-pos">
                                <div>CURSO</div>
                            </div>
                            <div class="duracao-pos">
                                <div>DURAÇÃO</div>
                            </div>
                            <div class="investimento-pos">
                                <div>INVESTIMENTO</div>
                            </div>
                            <div class="carga-pos">
                                <div>CARGA HORÁRIA</div>
                            </div>
                            <div class="inicio-pos">
                                <div>DATA DE INÍCIO</div>
                            </div>
                        </div>
                    </div>
                </div>
                @isset($educas)
                <div class="courses-list">
                    @foreach($educas as $educa)
                    <div class="wrapper">
                        <a href="{{ route('facuEducas', $educa->uri) }}" class="item link-inteiro-pos" title="{{ $educa->titleCourse }}">
                            <!--JL-->

                            <h4 class="course-name">
                                <div>
                                {{ $educa->titleCourse }}
                                    <!--JL-->

                                </div>
                            </h4>
                            <div class="detail detail-duracao">
                                <div>
                                    <p class="textMob">Duração</p>
                                    <small>{{ $educa->courseDurationFirst }}</small> {{ $educa->courseDurationSecond }} </div>
                            </div>
                            <div class="detail detail-investimento">
                                <div>
                                    <p class="textMob">Investimento</p>
                                    <!--JL-->
                                    <small>{{ $educa->investmentFirst }}</small> {{ $educa->investmentSecond }} </div>
                            </div>
                            <div class="detail detail-carga">
                                <div>
                                    <p class="textMob">Carga Horária</p>
                                    {{ $educa->workload }} </div>
                            </div>

                            <div class="detail detail-inicio">
                                <div>
                                    <p class="textMob">Data de Início</p>
                                    {{ $educa->workloadDate }} </div>
                            </div>
                        </a>
                        <!--JL-->
                        <a href="{{ route('facuEducas', $educa->uri) }}" class="register" title="{{ $educa->titleCourse }}">
                            <div class="wrapper">SAIBA MAIS</div>
                        </a>
                        <a href="http://emec.mec.gov.br/emec/consulta-cadastro/detalhamento/d96957f455f6405d14c6542552b0f6eb/MTg0Ng==/93916316abe23148507bd4c260e4b878/MTA0NzQ4" class="register mec linkMec" target="_blank">
                            <div class="wrapper">
                                <i class="icon-mec"></i>
                                <span>Cadastro no MEC</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endisset
            </div>
        </div>

        <p class="advise">
            *Valores promocionais para o site EAD Pleno UNILINS (unilinsead.com.br)
        </p>
    </section>

    <!-- LISTA EXTENSAO -->
    <section class="section section-courses" id="extensao">
        <div class="container">
            <h2 class="centered-heading"><strong>Cursos de Extensão</strong> a distância (EAD)</h2>


            <div id="extensao" class="courses-list-areas">

                <div class="courses-list cabecalho-ext">
                    <div class="wrapper">
                        <div class="item">
                            <div class="name">
                                <div>CURSO</div>
                            </div>
                            <div class="duracao">
                                <div>DURAÇÃO</div>
                            </div>
                            <div class="investimento">
                                <div>INVESTIMENTO</div>
                            </div>
                            <div class="carga">
                                <div>CARGA HORÁRIA</div>
                            </div>
                            <div class="inicio">
                                <div>DATA DE INÍCIO</div>
                            </div>
                        </div>
                    </div>
                </div>
                @isset($extens)
                <div class="courses-list">
                    @foreach($extens as $exten)
                    <div class="wrapper">
                        <a href="{{ route('facuExtens', $exten->uri) }}" class="item link-inteiro-ext" title="{{ $exten->titleCourse }}">
                            <!--JL-->

                            <h4 class="course-name">
                                <div>
                                {{ $exten->titleCourse }}
                                    <!--JL-->

                                </div>
                            </h4>
                            <div class="detail detail-duracao">
                                <div>
                                    <p class="textMob">Duração</p>
                                    1 mês </div>
                            </div>
                            <div class="detail detail-investimento">
                                <div>
                                    <p class="textMob">Investimento</p>
                                    <!--JL-->
                                    <small>{{ $exten->investmentFirst }}</small> {{ $exten->investmentSecond }} </div>
                            </div>
                            <div class="detail detail-carga">
                                <div>
                                    <p class="textMob">Carga Horária</p>
                                    {{ $exten->workload }} </div>
                            </div>

                            <div class="detail detail-inicio">
                                <div>
                                    <p class="textMob">Data de Início</p>
                                    {{ $exten->workloadDate }} </div>
                            </div>
                        </a>
                        <!--JL-->
                        <a href="{{ route('facuExtens', $exten->uri) }}" class="register" title="{{ $exten->titleCourse }}">
                            <div class="wrapper">SAIBA MAIS</div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endisset
            </div>
        </div>

        <p class="advise">
            *Valores promocionais para o site EAD Pleno UNILINS (unilinsead.com.br)
        </p>
    </section>
</div>

@include('faculdade.includes.facuForm')


<div class="text-seo">
    <div class="container">
        <h2 class="title">EAD PLENO Unilins</h2>
        <p>Entre as melhores faculdades ead, com nota 4 no Ministério da Educação e reconhecimento em todos os cursos da modalidade de educação a distância, o EAD Pleno Unilins inovou o modo tradicional de ensinar e aprender trazendo uma metodologia específica,
            que garante a você um aprendizado mais completo, mais simples e mais flexível.</p>
        <p>Possibilitando aos seus alunos a oportunidade de cursar uma faculdade a distância, o EAD Pleno Unilins oferece cursos de <a href="/graduacao-a-distancia-ead">graduação a distância</a> e pós-graduação a distância, sendo uma excelente opção para
            todos aqueles que desejam ampliar as suas qualificações profissionais e buscam aumentar suas remunerações.</p>

        <h3>O que há de mais completo em cursos de Graduação e Pós-Graduação</h3>
        <p>Com opções de graduação (faculdade ead) que contemplam bacharelado, licenciatura e tecnologia, além da faculdade de <a href="/faculdade-de-pedagogia-a-distancia-ead/509">Pedagogia</a> a distância e da faculdade de
            <a href="/faculdade-de-administracao-a-distancia-ead/484"></a>Administração a distância, são oferecidos os cursos de Ciências Contábeis, Letras/Português, Gestão de Recursos Humanos, Gestão Financeira, Gestão Pública, Marketing, Negócios Imobiliários e Processos Gerenciais.</p>
        <p>Na área de educação, a pós-graduação ead oferece os cursos de Administração Escolar, Alfabetização e Letramento, Atendimento Educacional Especializado, Docência no Ensino Superior, Educação de Jovens e Adultos – EJA, Educação Especial e Inclusiva,
            Educação Especial e Psicomotricidade, Educação Infantil, Ensino Lúdico, Gestão Escolar, Gestão Escolar, Orientação e Supervisão, Gestão Pública, LIBRAS, Neuropsicopedagogia, Orientação, Supervisão e Inspeção Escolar, Psicomotricidade, Psicopedagogia
            com ênfase em Educação Especial, Psicopedagogia Institucional, Supervisão e Orientação Educacional e Tutoria em Educação a Distância.</p>

        <h3>A metodologia EAD Pleno</h3>
        <p>Quanto à metodologia, com acesso a materiais compostos por livros impressos, videoaulas em DVD e também online, por meio do Ambiente Virtual de Aprendizagem - AVA, o EAD Pleno Unilins oferta o acesso ao conhecimento de forma prática e diversificada,
            respeitando as possibilidades de cada um, e considerando até mesmo a dificuldade de conexão ou acesso à internet.</p>
        <p>Sim, ao contrário do que muita gente pensa, com o EAD Pleno é possível estudar também sem internet, uma vez que o método não se prende somente aos recursos tecnológicos.</p>
        <p>Sendo assim, sem qualquer limitador entre o aluno e o conteúdo, oferecemos uma experiência de aprendizagem completa, já que os materiais estão todos ali, ao alcance das mãos.</p>
        <p>Aliando uma excelente didática ao domínio completo dos conteúdos no currículo, nosso corpo docente é formado pelos melhores e mais renomados profissionais do país, sem limites geográficos, o que traz segurança e desperta nos alunos a vontade de
            aprender.
        </p>
        <p>Neste sentido, ao explorar todo o potencial dos educadores, desenvolvemos uma metodologia superior, mais simples e de fácil entendimento.</p>
        <p>Para obter este resultado, possibilitamos que os autores que escrevem os livros, sejam os mesmos que gravam as videoaulas e elaboram as questões, assegurando a unidade no compartilhamento das informações e minimizando possíveis dúvidas.</p>

        <h3>Mais simples e mais flexível</h3>
        <p>Ou seja, comprometidos com a qualidade da educação, os mesmos professores são responsáveis tanto pela produção impressa, quanto audiovisual dos recursos, o que garante que ao optar por um determinado estilo de estudo, seja ele o livro impresso,
            aula em DVD ou online, o aluno encontre exatamente a mesma didática.</p>
        <p>E para ficar ainda melhor, ao escolher o EAD Pleno Unilins como alternativa, você contará com um sistema de avaliação simplificado por provas online e presenciais que respeitam o seu tempo, permitindo que você escolha a data da avaliação online,
            e tenha somente um encontro presencial por módulo.</p>
        <p>Por fim, para encerrar com chave de ouro, com o EAD Pleno Unilins você ainda tem direito aos módulos flexíveis, que permitem prorrogar o prazo de estudos e, consequentemente, reduzir o valor da mensalidade, driblando as dificuldades financeiras
            e/ou de tempo que possam vir a atrapalhar sua trajetória de estudos.</p>

        <h3>Cursos de extensão</h3>
        <p>E os <a href="/cursos-de-extensao-a-distancia-ead">cursos de extensão</a> são uma ótima opção para os alunos que querem aperfeiçoar o conhecimento de forma rápida. O objetivo é complementar os estudos sobre um determinado assunto ou área. Esses
            cursos também são utilizados para obter horas complementares em cursos de graduação, por exemplo. O EAD Pleno Unilins oferece as seguintes opções de cursos de extensão: Economia Política: Evolução do Pensamento Econômico; Educação - Temas
            Transversais; Estatuto da Criança e do Adolescente; Inclusão Digital, Introdução a Gestão da Qualidade e Primeiros Socorros para Professores no Ambiente Escolar.</p>
    </div>
</div>


@endsection
