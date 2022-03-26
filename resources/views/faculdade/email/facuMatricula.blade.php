@component('mail::message')
Olá você recebeu um novo contato a partir de seu site!

Nome: <b>{{ $reply_name }}</b>

Email: <b>{{ $reply_email }}</b>

Telefone: <b>{{ $cell }}</b>

Curso: <b>{{ $course }}</b>

Mensagem:

@component('mail::panel')
    {{ $message }}
@endcomponent

@endcomponent
