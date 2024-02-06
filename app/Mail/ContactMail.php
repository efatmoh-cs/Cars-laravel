<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;




class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public array $contact;
    /**
     * Create a new message instance.
     */
    public function __construct(array $contact)
    {
        $this->contact=$contact;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(new Address($this->contact['email']),
            subject: $this->contact['message'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'contactus',
            with: [
                'firstname'  => $this->contact['firstname'],
                'email'     => $this->contact['email'],
                'lastname'   => $this->contact['lastname'],
                'message'   => $this->contact['message']
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
