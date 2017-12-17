<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Contacts;
use App\Http\Requests\FormContactRequest;

class classMailContact extends Mailable
{
    use Queueable, SerializesModels;

    public $form;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($form)
    {
        $this->form = $form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(FormContactRequest $request)
    {
        $form = $this->form;
        return $this->view('email', compact('form'))->from($request->mail)->subject($request->sujet);
    }
}
