@extends('faculdade.master.facu')
@section('content')
<div class="section section-faq">
    <div class="container">
        <h1 class="heading heading-alpha">Perguntas Frequentes</h1>

        <div class="subjects">
            <div class="wrapper">
                <a href="#" class="item" edbox data-box-header="Como efetuo minha matrícula em um curso de Graduação a distância Unilins?" data-box-target="#question-1">Como efetuo minha matrícula em um curso de Graduação a distância Unilins?</a>
            </div>

            <div class="wrapper">
                <a href="#" class="item" edbox data-box-header="Como efetuo minha matrícula em um curso de Pós-Graduação a distância Unilins?" data-box-target="#question-2">Como efetuo minha matrícula em um curso de Pós-Graduação a distância Unilins?</a>
            </div>

            <div class="wrapper">
                <a href="#" class="item" edbox data-box-header="O que é Kit Matrícula?" data-box-target="#question-3">O que é Kit Matrícula?</a>
            </div>

            <div class="wrapper">
                <a href="#" class="item" edbox data-box-header="O que é rematrícula?" data-box-target="#question-4">O que é rematrícula?</a>
            </div>

            <div class="wrapper">
                <a href="#" class="item" edbox data-box-header="Como funciona o trancamento do curso?" data-box-target="#question-5">Como funciona o trancamento do curso?</a>
            </div>

            <div class="wrapper">
                <a href="#" class="item" edbox data-box-header="É possível fazer a troca de curso, caso eu tenha me enganado na hora da matrícula?" data-box-target="#question-6">É possível fazer a troca de curso, caso eu tenha me enganado na hora da matrícula?</a>
            </div>

            <div class="wrapper">
                <a href="#" class="item" edbox data-box-header="Como faço para acessar os conteúdos do curso pela internet?" data-box-target="#question-7">Como faço para acessar os conteúdos do curso pela internet?</a>
            </div>

            <div class="wrapper">
                <a href="#" class="item" edbox data-box-header="Não recebi meu login e senha, o que devo fazer?" data-box-target="#question-8">Não recebi meu login e senha, o que devo fazer?</a>
            </div>

            <div class="wrapper">
                <a href="#" class="item" edbox data-box-header="Por que meu usuário está logado? O que devo fazer?" data-box-target="#question-9">Por que meu usuário está logado? O que devo fazer?</a>
            </div>
        </div>

        <div id="question-1" class="modal modal-container modal-faq text">
            <p>
                É muito simples e é realizada neste site! Escolha o curso que deseja, faça a sua pré-inscrição no processo seletivos. Após o pagamento da taxa de inscrição você poderá realizar a prova no Polo Educacional. Depois da aprovação basta entrar em contato para
                dar continuidade ao processo de matrícula.
            </p>

            <p>
                Para os casos de transferência de instituição, aluno que já tem uma Graduação ou que deseja utilizar a nota do ENEM, não é necessário participar do processo seletivo.
            </p>
        </div>

        <div id="question-2" class="modal modal-container modal-faq text">
            <p>
                Você pode fazer a sua pré-matrícula aqui mesmo neste site. Escolha o curso que deseja e preencha o Formulário de Cadastro. Feita a pré-inscrição, o aluno deve entrar em contato com o Polo Educacional escolhido para receber o Kit Matrícula e demais instruções
                para finalização da matrícula.
            </p>
        </div>

        <div id="question-3" class="modal modal-container modal-faq text">
            <p>
                Kit Matrícula é um kit composto pelo: Termo de Adesão, Declaração de Ciência e Boleto de Pagamento da Taxa de Inscrição. São os documentos gerados pelo Agente Educacional para iniciar o processo da matrícula nos cursos de Graduação e de Pós-Graduação
                a distância Unilins.
            </p>
        </div>

        <div id="question-4" class="modal modal-container modal-faq text">
            <p>
                A rematrícula é realizada a cada semestre e habilita o aluno a continuar seus estudos. Ela é gratuita e automática para os alunos que não têm pendências acadêmicas ou financeiras.
            </p>
        </div>

        <div id="question-5" class="modal modal-container modal-faq text">
            <p>
                Quando necessário, o aluno deverá solicitar o trancamento através do portal AVA e pagar a respectiva taxa. O aluno com matrícula cancelada não poderá retornar ao curso. No caso de matrícula trancada, o aluno deverá solicitar a reativação da sua matrícula
                no portal AVA para retomar o curso. Caso o aluno não solicite o retorno ao curso dentro de dois anos após trancamento, poderá ser considerado cancelado.
            </p>
        </div>

        <div id="question-6" class="modal modal-container modal-faq text">
            <p>
                Sim. Se o aluno não efetuou o pagamento do boleto de adesão (kit matrícula), o curso poderá ser trocado. Para isso, entre em contato com seu Polo Educacional e solicite emissão de kit matrícula para o curso desejado.
            </p>
        </div>

        <div id="question-7" class="modal modal-container modal-faq text">
            <p>
                Após efetivação da matrícula, o aluno recebe em seu e-mail a senha de acesso ao Portal AVA. O conteúdo online estará disponível no portal de acordo com andamento do curso.
            </p>
        </div>

        <div id="question-8" class="modal modal-container modal-faq text">
            <p>
                Sempre que a matrícula é liberada um e-mail é enviado ao aluno e ao agente com login e senha. O aluno terá acesso ao seu Portal AVA em até 24 horas após a liberação de sua matrícula. Algumas ferramentas de e-mail encaminham a nossa mensagem direto para
                a caixa de lixo eletrônico (ou spam). Verifique esta pasta para ver se recebeu os seus dados de acesso. Alternativamente você pode fazer o login com o e-mail e matrícula. Seu Polo Educacional poderá passar essas informações
            </p>
        </div>
    </div>
</div>
@endsection
