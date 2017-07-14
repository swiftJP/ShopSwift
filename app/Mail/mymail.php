<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mymail extends Mailable
{
    use Queueable, SerializesModels;


    public $delivery_items;
    public $delivery_address;
    public $delivery_time;

    public function __construct($delivery_items, $delivery_address, $delivery_time)
    {
        $this->delivery_items=$delivery_items;
        $this->delivery_address=$delivery_address;
        $this->delivery_time=$delivery_time;
    }


    public function build()
    {
        return
            $this->from('noreply@shopswift.com')
                 ->view('mail.mymail');
    }
}

