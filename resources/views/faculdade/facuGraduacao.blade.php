@extends('faculdade.master.facu')
@section('content')
<section class="section section-courses" id="graduacao">
    <div class="container">
        <h1 class="centered-heading">Centro Universitário Unilins – <strong>Cursos de Graduação a Distância</strong></h1>


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


<div class="text-seo">
    <div class="container">
        <h2 class="title">Cursos de Graduação a Distância EAD Pleno</h2>
        <p>Os cursos de graduação, que possibilitam o acesso ao nível superior de ensino, abrem as portas para diversas oportunidades no mercado de trabalho, e com elas o benefício de uma remuneração justa e compatível com a sua função.
        </p>
        <p>Afinal, quem nunca sonhou em trabalhar com aquilo que gosta e ainda ser pago por isso?</p>
        <p>Com os cursos de graduação do EAD Pleno Unilins esta realidade está mais perto do que nunca!</p>
        <p>Para começar, por meio da nossa metodologia específica, você tem a sua disposição o melhor e mais eficaz material quando se fala em educação a distância. Tudo isso, de forma explicativa e minimizando a possibilidade de dúvidas, uma vez que o mesmo
            autor que escreve os livros impressos, também grava as videoaulas e elabora as questões.</p>
        <p>E por falar nos benefícios oferecidos pelo EAD Pleno Unilins, um detalhe que não pode passar despercebido é o nosso respeito e preocupação com seu tempo.</p>
        <p>Desta forma, com um número de encontros presenciais reduzidos, você precisará se dirigir ao polo para realização das provas presenciais somente 2 vezes por semestre. E o melhor de tudo: Com total liberdade, quem escolhe a data dos encontros é
            você.
        </p>

        <h3>E as vantagens não param por aí...</h3>
        <p>Falando ainda nas vantagens do EAD Pleno, aqui você não sofre com dificuldade de conexão e nem fica refém da internet! Isso porque não estando preso somente aos recursos tecnológicos, oferecemos uma experiência completa, com todos os materiais
            ali, ao alcance das suas mãos.</p>
        <p>Mas se você é daquelas pessoas que não abre mão de estudar online, não se preocupe! Você também terá a sua disposição todos esses materiais em um Ambiente Virtual de Aprendizagem totalmente intuitivo, pensado especialmente para que você tenha
            a melhor experiência ao assistir videoaulas, fazer as provas online e acompanhar desempenho.
        </p>
        <p>Só com a graduação a distância Unilins você tem total autonomia para escolher o tempo de duração do seu curso, que pode ser em 48 ou 64 meses.</p>
        <p>Agora que você já conhece um pouco sobre a nossa metodologia e sistema de ensino, é hora de falar sobre os nossos cursos.
        </p>

        <h3>O mais completo em Graduação a Distância</h3>
        <p>A graduação ead Unilins oferece as modalidades de bacharelado, licenciatura e tecnologia, em áreas como Administração, Educação, Gestão, Marketing, entre outros.</p>
        <p>O curso superior a distância em Administração, por exemplo, tem como objetivo desenvolver competências e tornar o administrador um profissional apto a criar e implementar projetos de negócios com atitude empreendedora e visão estratégica, permitindo
            ao profissional ter uma visão geral de toda a empresa, tornando-a mais eficiente e produtiva.
        </p>
        <p>Desta forma fazendo uma faculdade de administração a
        distância</a>, você terá todo conhecimento e as ferramentas necessárias para, tão logo esteja de posse do seu diploma, atuar nas melhores empresas do ramo administrativo.</p>
        <p>Já a faculdade de pedagogia a distância</a> da Unilins é ideal para quem tem interesse em ensinar, orientar e educar pessoas em diversos estágios da vida, ou seja, estar habilitado para trabalhar
            com educação e aprendizagem desde a Educação Infantil até a Educação Profissional.</p>
        <p>Além disso, a Pedagogia trata-se de um curso que ainda contribui para o posicionamento crítico em relação às questões do ensino, sua estrutura, funcionamento e desenvolvimento da aprendizagem.</p>
        <p>Falando agora da faculdade de letras a distância, o objetivo é proporcionar um estudo do funcionamento da Língua Portuguesa e suas respectivas literaturas, formando profissionais completos, com total conhecimento
            da área.</p>
        <p>Os profissionais desta área possuem uma atuação muito ampla. Há oportunidades em editoras e veículos de imprensa como revisor ou editor. Em agências, como produtor de conteúdos. E claro, dando aulas sejam elas particulares ou não.
        </p>
        <p>Mas se o seu grande sonho é se tornar um profissional capaz de executar as diversas rotinas do departamento de pessoal e realizar ações que apoiam a gestão de pessoas, a faculdade de RH a distância</a>            é para você.</p>
        <p>No curso de tecnologia em Gestão de Recursos Humanos você irá tornar-se um profissional apto a atuar nos processos dessa área, tendo ampla visão de gerenciamento e compreendendo práticas a serem aplicadas pelas organizações.
        </p>
        <p>Com um campo de trabalho bastante vasto, os graduados podem trabalhar em instituições públicas, privadas e do terceiro setor, indústria e comércio e empresas de consultorias, com excelentes remunerações.</p>

        <h3>Conquiste seu diploma de forma simples e flexível</h3>
        <p>Para encerrar, esses são apenas alguns dos destaques entre os cursos de graduação Unilins. Todos especialmente pensados para você que busca tornar-se o melhor profissional em sua futura área de atuação.</p>
        <p>E se você também busca a melhor especialização a distância</a> com certeza veio ao lugar certo. Não deixe de conferir os nossos cursos e dê um upgrade na sua carreira.</p>

        <h3>Cursos de extensão</h3>
        <p>Os cursos de extensão também servem como um complemento aos ensinamentos da graduação. São cursos rápidos que ajudam a ampliar o conhecimento dos alunos em um assunto específico, além disso, eles
            também servem como horas complementares exigidas na graduação. No EAD Pleno Unilins você pode escolher entre os seguintes cursos de extensão: Economia Política: Evolução do Pensamento Econômico; Educação - Temas Transversais; Estatuto da Criança
            e do Adolescente; Inclusão Digital, Introdução a Gestão da Qualidade e Primeiros Socorros para Professores no Ambiente Escolar.</p>

    </div>
</div>
@endsection
