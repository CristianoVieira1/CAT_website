@component('mail::message')
Olá você recebeu um novo contato a partir de seu site!

Nome: <b>{{ $reply_name }}</b>

Email: <b>{{ $reply_email }}</b>

Sobre: <b>{{ $subject }}</b>

Mensagem:

@component('mail::panel')
    {{ $message }}
@endcomponent

@endcomponent
