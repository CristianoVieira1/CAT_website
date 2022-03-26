<section class="contact-one">
    <h2 class="contact-one__title text-center">Entrar em contato</h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>

                @endforeach

                <form action="{{ route('sendEmail') }}" method="post" autocomplete="off">
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
            </div>
        </div>
        <div class="result text-center"></div>
    </div>
</section>



