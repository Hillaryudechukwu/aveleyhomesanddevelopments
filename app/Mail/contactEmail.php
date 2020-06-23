<?php

namespace App\Mail;

use App\Models\Page;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var Order
     */
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct(Name $name)
    // {
    //     $this->name = $name;
    // }

    /**
     * Build the message.
     *
     * @return $this
     */

     public function build()
    {
        return $this->from('mail@example.com', 'Aveleyhomes and developments')
            ->subject('Mailtrap Confirmation')
            ->markdown('emails.contactEmail')
            ->with([
                'name' => 'New Mailtrap User',
                'link' => 'https://mailtrap.io/inboxes'
            ]);
    }

}