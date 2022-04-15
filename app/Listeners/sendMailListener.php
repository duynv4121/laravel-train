<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\sendMailEvent;
use App\Mail\sendMail;
use Mail;

class sendMailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(sendMailEvent $event)
    {
        $view = new sendMail();
        Mail::to($event->email)->send($view)->with([
            'email' => $this->email
        ]);

        // $data = [
        //     'email' => $event->email,
        // ];

        // $email = $event->email;
    
        // Mail::send($view, $data, function ($message) use ($data) {
        //     $message->from('duysangtao2001@gmail.com', 'Green Farm Market');
        //     $message->to('duy@gmail.com', 'sagdh');
        //     $message->subject('Khôi phục mật khẩu Green Farm Market');
        // });

    }
}
