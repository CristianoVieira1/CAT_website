
<section id="contato" class="section section-contact">
    <div class="container">
        <h2 class="centered-heading centered-heading-white">
            Fale Conosco
        </h2>
        <h3 class="centered-sub-heading centered-sub-heading-white">
            Saiba mais sobre nossos cursos, rede de atendimento ou deixe-nos uma mensagem!
            <br>
        </h3>

        <form action="{{ route('facuMail') }}" method="post" autocomplete="off">
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
                <input type="tel" id="cell" name="cell" class="form-control {{ ($errors->has('cell') ? 'is-invalid' : '') }}" placeholder="Telefone" required >
                <div class="invalid-feedback">
                    {{ $errors->first('cell') }}
                </div>
            </div>

            <div class="form-group">
                <textarea name="message" name="message" class="form-control" id="message" cols="30" rows="3" placeholder="Mensagem" ></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn-form">Enviar Mensagem</button>
            </div>
            @if(session('mensagem'))
                <div class="alert alert-success" role="alert">
                    <p>{{session('mensagem')}}</p>
                </div>
            @endif

        </form>

    </div>
</section>
