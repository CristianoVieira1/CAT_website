@extends('faculdade.master.facu')
@section('content')

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

    @include('faculdade.includes.facuForm')


    <div class="text-seo">
        <div class="container">
            <h2 class="title">Cursos de Pós-graduação a Distância EAD Pleno</h2>
            <p>Quando o assunto é salário uma coisa é certa, todos gostariam de receber mais em relação ao que ganham atualmente. Com um salário maior aumentam-se as chances de fazer uma grande viagem, comprar ou reformar a casa, oferecer uma qualidade de vida
                melhor para a família…</p>
            <p>Conquistar um excelente aumento salarial não é algo tão distante da sua realidade! Para isso, além da graduação a distância</a>, você precisa agregar ao seu currículo uma Pós-Graduação EAD Pleno Unilins!</p>
            <p>Em recente pesquisa realizada com cerca de dois milhões de profissionais, de mais de 25 mil empresas em 4.063 cidades ao redor do Brasil foi mostrado que, dependendo do cargo, ter uma pós-graduação pode significar aumento de até 53,7% no salário.</p>

            <h3>Inicie agora mesmo a caminhada rumo ao aumento do seu salário!</h3>
            <p>Uma especialização que agrega demais, não apenas ao currículo como também ao salário de professores, é a Pós-Graduação em Psicopedagogia com Ênfase em
                    Educação Especial a distância</a>, que tem como objetivo implementar aprofundamentos teórico-metodológicos que auxiliem os profissionais envolvidos no trabalho com as pessoas que necessitam de prática de ensino diferenciadas para o seu desenvolvimento
                global. Professores-Psicopedagogos podem receber vencimentos de até R$ 6 mil.</p>
            <p>Quer mais um bom exemplo de curso capaz de dar um ótimo upgrade no seu salário? A Pós-Graduação em Gestão Escolar, Orientação e
                    Supervisão a distância</a>. Ela ressalta a legislação educacional e o trabalho de gestão da escola segundo variadas perspectivas e aspectos didático-pedagógicos relevantes para a condução do processo educativo. Pós-graduados nessa área têm um
                amplo campo de atuação, podendo assumir cargos de Diretor Geral ou Escolar, Diretor Financeiro ou Administrativo, Secretário, entre outros. Pegando como parâmetro a função de Diretor, existe possibilidade de ganhos que ultrapassam os R$ 19
                mil.
            </p>
            <p>A Pós-Graduação em Educação Especial e Inclusiva a
                    distância</a> é mais uma de nossas especializações que irá fazer grande diferença não só no seu salário como também no que diz respeito a agregar conhecimento a sua carreira. Ela tem como objetivo proporcionar um aprofundamento teórico-metodológico
                que implemente a prática pedagógica dos profissionais envolvidos no trabalho com a pessoa que necessita de acompanhamento especial. Além de propiciar uma visão mais abrangente em relação à inclusão da pessoa com necessidades especiais no ensino
                regular.
            </p>
            <p>Os exemplos mostrados acima são apenas alguns, dentre tantas outras situações Brasil afora, que comprovam que tem havido sim priorização e valorização para profissionais cada vez mais completos, mais bem qualificados.</p>
            <p>Por isso a importância de buscar uma especialização a distância, um fator a mais para que seu currículo esteja de acordo com o que é buscado.</p>
            <p>Mas você não conseguirá apenas um bom aumento salarial ao fazer uma Pós-Graduação EAD. Trata-se de uma ótima oportunidade para trocar experiências com especialistas e outros alunos além, é claro, de dar uma boa incrementada na sua lista de contatos.
                Enfim, é só vantagem e valorização para você. Lembre-se, um bom profissional nunca para de estudar, de adquirir conhecimento.</p>

            <h3>O mais completo em Pós-Graduação a Distância</h3>
            <p>Na Pós-Graduação a distância da Unilins você encontra uma vasta lista de opções de cursos de extrema qualidade, que o deixarão na mira das principais empresas, tendo ainda a liberdade de escolher a duração e quanto quer investir ao fazê-la.</p>
            <p>Somos referência no mercado; credenciados pelo MEC com nota 4; temos polos presentes em grande parte do território nacional; disponibilizamos uma metodologia de estudos flexível, com oferta de materiais físicos e online, possibilitando ao aluno
                escolher a melhor forma de estudar, não importando o local ou o horário; prezamos pela qualidade do conteúdo oferecido e oferecemos o que há de mais moderno em tecnologia; temos a honra de poder contar com um corpo docente altamente qualificado;
                e claro, aliamos o que existe de mais completo em pós-graduação ead com preços justos.</p>
            <p>Acredite, as empresas não levam em conta apenas o fato de você ter ou não ter uma Pós-Graduação, mas também dão muita importância sobre em qual instituição você a concluiu. E ter concluído a especialização com o EAD Pleno Unilins é certeza de
                grande valorização no momento da sua avaliação enquanto postulante a uma oportunidade de emprego.
            </p>
            <p>Torne-se mais competitivo no mercado de trabalho! Dê um grande salto na sua carreira! Faça com que seu currículo cause impacto! Inicie agora mesmo uma Pós-Graduação EAD com a Unilins!</p>
            <p>Seja muito bem-vindo ao EAD Pleno Unilins, mais completo e mais flexível!</p>

            <h3>Cursos de extensão</h3>
            <p>Além da pós-graduação, é possível complementar o seu conhecimento com os cursos de extensão. Em um curto período de tempo, você pode ampliar a sua compreensão sobre diferentes temas. No EAD Pleno Unilins, você conta com as seguintes opções de cursos de extensão</a>: Economia Política: Evolução do Pensamento Econômico; Educação - Temas Transversais; Estatuto da Criança e do Adolescente; Inclusão Digital, Introdução a Gestão da Qualidade
                e Primeiros Socorros para Professores no Ambiente Escolar.</p>

        </div>
    </div>


@endsection
