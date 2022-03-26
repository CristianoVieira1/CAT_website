<header class="header">
    <div class="container">
        <div class="header-logo">
            <h1>
                <a href="{{ route('facuHome') }}" class="headingHome" title="Unilins - Graduação e Pós-graduação EAD">
                    <img src="{{ url('faculdade/assets/images/ead-pleno_unilins.png') }}" alt="Faculdade a Distância e Pós-graduação a Distância - EAD Pleno CAT - UNILINS">
                </a>
            </h1>
        </div>

        <div class="header-menu">

            <nav class="menu-items">
                <div class="item item-courses">
                    <div class="item-name icon-arrow-down">Cursos</div>

                    <div class="sub-menu">
                        <a href="{{ route('facuGraduacao') }}" class="sub-menu-item" title="Cursos de Graduação">Graduação</a>

                        <a href="{{ route('facuPosGraduacao') }}" class="sub-menu-item" title="Cursos de Pós Graduação">Pós-Graduação</a>

                        <a href="{{ route('facuExtencao') }}" class="sub-menu-item" title="Cursos de Extensão">Extensão</a>

                    </div>
                </div>

                <a href="{{ route('facuPleno') }}" class="item" title="Conheça o EAD Pleno Unilins">EAD Pleno</a>

                {{-- <a href="#contato" class="item" title="Conheça o EAD Pleno Unilins">Faça já</a> --}}

                <div class="item" edbox data-box-header="INSCREVA-SE" data-box-target=".dif-9">
                    Faça já
                    <div class="modal dif-9">
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
                                        <input type="text" id="course" name="course" class="form-control {{ ($errors->has('course') ? 'is-invalid' : '') }}"  placeholder="Assunto" required >
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
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ session()->get('message') }}</strong>
                      </div>
                    @endif

                <div class="item item-nav-more">
                    <div class="item-name icon-arrow-down">navegue mais</div>

                    <div class="sub-menu">
                        <a href="{{ route('facuDuvidas') }}" class="sub-menu-item" title="Perguntas Frequentes">Dúvidas</a>

                        <a href="#" edbox data-box-header="Editais" data-box-target=".exam-notices" class="sub-menu-item btn-notices" title="Confira os editais dos vestibulares Unilins">Editais</a>

                        <a href="{{ route('facuAbout') }}" class="sub-menu-item" title="Institucional">Institucional</a>

                        <a href="{{ route('facuContact') }}" class="sub-menu-item" title="Institucional">Contato</a>
                    </div>
                </div>

                <a href="{{ route('cursosHome') }}" class="item" title="Conheça o EAD Pleno Unilins">Cursos Profissionalizantes</a>

                <a href="{{ route('cursosHome') }}" class="item" title="Conheça o EAD Pleno Unilins">CAT</a>
            </nav>

            <div class="modal modal-container exam-notices">
                <div class="wrapper">
                    <div class="item">
                        Edital EAD Unilins - 02/2019
                        <a href="https://www.unilinsead.com.br/downloads/unilins-edital-nov-2019.pdf" class="hyperlink" title="Edital EAD Unilins - 01/2019" target="_blank" rel="noopener">visualizar</a>
                    </div>
                    <div class="item">
                        Edital Prouni - Nº 42 de 17/06/2020
                        <a href="http://www.in.gov.br/en/web/dou/-/edital-n-42-de-17-de-junho-de-2020-262204952" class="hyperlink" title="Edital Prouni - Nº 42 de 17/06/2020" target="_blank" rel="noopener">visualizar</a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="header-actions">
            <div class="actions-items">
                <a href="http://unilins.portalava.com.br/login" class="item icon-login" title="Efetue seu login no AVA" target="_blank" rel="noopener"></a>

                <a href="#" edbox data-box-header="Contatos" data-box-target=".footer .contacts-group" data-box-copy="true" data-box-add-class="contatos-modal" class="item icon-phone" id="btn-contatos"></a>

                <a href="{{ url('https://api.whatsapp.com/send?phone=555130858338') }}" class="item icon-whatsapp" title="Fale conosco pelo whatsapp" target="_blank" rel="noopener"></a>
            </div>
        </nav>

        <button class="btn-toggle-menu"></button>
    </div>
</header>
