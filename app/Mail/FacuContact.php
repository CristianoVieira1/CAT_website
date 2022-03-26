<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FacuContact extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->data['reply_email'], $this->data['reply_name'])
        ->to("contato@eadcat.com.br", "CAT - Centro de Aperfeiçoamento Tecnológico")
            ->from("contato@eadcat.com.br", "CAT - Centro de Aperfeiçoamento Tecnológico")
        ->markdown('email.facuContact', [
            'reply_name' => $this->data['reply_name'],
            'reply_email' => $this->data['reply_email'],
            'cell' => $this->data['cell'],
            'message' => $this->data['message']
        ]);
    }

    // {
    //     return $this->replyTo($this->data['reply_email'], $this->data['reply_name'])
    //         ->to(atendimento@catbr.com.br, env('MAIL_FROM_NAME'))
    //         ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
    //         ->subject('Novo Contato: ' . $this->data['subject'])
    //         ->markdown('email.contact', [
    //             'reply_name' => $this->data['reply_name'],
    //             'reply_email' => $this->data['reply_email'],
    //             'subject' => $this->data['subject'],
    //             'message' => $this->data['message']
    //         ]);
    // }
}
