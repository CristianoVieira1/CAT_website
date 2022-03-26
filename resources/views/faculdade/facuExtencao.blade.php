@extends('faculdade.master.facu')
@section('content')
<section class="section section-courses" id="extensao">
    <div class="container">
        <h1 class="centered-heading"><strong>Cursos de Extensão</strong> a distância (EAD)</h1>


        <div id="extensao" class="courses-list-areas">
            <h3 class="area-name-heading">
                <i class="heading-icon icon-next"></i>
                <span class="heading-label">Extensão</span>
            </h3>
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
                                04/05/2020 </div>
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

<div class="text-seo">
    <div class="container">
        <h2 class="title">Cursos de Extensão a Distância EAD Pleno </h2>
        <p>Considerados como uma boa opção para quem busca aperfeiçoamento profissional em um curto espaço de tempo, os cursos de extensão a distância são bem recomendados seja antes ou, até mesmo, depois de se iniciar um curso de graduação ou pós-graduação a distância</a>.</p>
        <p>Sendo uma atividade acadêmica, técnica ou cultural que não faz parte ou é integrante do ensino de graduação ou pós-graduação, os cursos de extensão tem a função de ampliar os conhecimentos e noções de seus alunos, gerando destaque no mercado profissional.</p>
        <p>Ofertados por instituições de ensino, o seu público alvo não se restringe apenas a acadêmicos. De maneira geral, podem participar estudantes ou apenas interessados pelo assunto, desde que não seja aplicada a necessidade de algum conhecimento prévio
            na área.</p>

        <h3>O mais completo em cursos de Extensão EAD</h3>
        <p>Com grande valorização no mercado de trabalho, os cursos de extensão permitem ainda acompanhar as tendências e novidades relacionadas a uma área específica, e proporcionam o desenvolvimento de habilidades não trabalhadas durante o período de graduação,
            seja ela presencial ou uma graduação a distância</a>.</p>
        <p>E para quem está preocupado com o seu crescimento profissional e pensa em complementar a sua formação inicial, o EAD Pleno Unilins contempla várias opções de cursos que em diversas áreas como: Artes para Crianças, Artes Visuais e Música, Comunicação
            Alternativa, Dimensões da Não Aprendizagem, Educação Inclusiva e Tecnologia Assistiva, Ensino da Matemática, Ensino de Língua Portuguesa, Fundamentos, Elaboração e Análise de Projetos, Gestão de Finanças e Investimentos, Gestão de Pessoas,
            Gestão de Pessoas por Competência, Gestão Escolar, Introdução a Psicopedagogia Institucional, Jogos, Brinquedos e Brincadeiras, Jogos, Recreação e Lazer, Literatura Infantil, Movimento, Negociação Empresarial e Técnicas de Vendas, Psicomotricidade,
            Relações Humanas e Liderança, Tecnologia Assistiva, Atendimento Escolar Especializado em Educação Especial e Inclusão, Atendimento Especializado à Surdez, Educação Inclusiva e Introdução à Psicopedagogia.
        </p>

        <h3>Vantagens</h3>
        <p>Aplicados de forma bastante prática, rápida, simples e com custos reduzidos, os cursos de extensão têm uma série de vantagens, além das já descritas acima, como permitir um maior conhecimento de determinado assunto, proporcionar o contato com
            o ambiente universitário, possibilitar o networking, trabalhar habilidades específicas e incluir a vivência prática.</p>
        <p>Sendo assim, os cursos de extensão a distância ajudam a despertar novos interesses, podem servir como o incentivo para uma mudança de carreira, ou ainda como um direcionamento dos próximos passos em uma carreira profissional.
        </p>
        <p>No EAD Pleno Unilins, os cursos possuem ainda o objetivo de integrar a universidade e a sociedade em atividades que sejam comuns a estes dois ambientes.</p>
        <p>Para quem deseja ir além do currículo básico de ensino, optar pela modalidade de curso de extensão a distância traz, além de tudo, uma grande economia de tempo, já que você só precisa de um computador e acesso à internet para ter o conhecimento
            ao alcance das mãos.</p>
        <p>O curso de extensão a distância é realizado em um ambiente virtual de aprendizagem, no qual você terá acesso aos materiais e desenvolverá seus estudos.</p>
        <p>Aliás, um dos maiores benefícios do EAD Pleno Unilins está no fato de que o curso pode ser realizado a qualquer hora e momento, dependendo apenas da sua disposição.</p>
        <p>Sendo assim, de forma flexível, você é o responsável pelos seus estudos, tendo a liberdade de encaixar as aulas dentro da sua rotina.</p>
    </div>
</div>

@endsection
