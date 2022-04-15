<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\sendMail;
use Mail;

class sendMailJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $view = new sendMail();
        // Mail::to($this->email)->send($view);

        // $data = [
        //     'email' => $this->email,
        // ];
        
        // Mail::send($view, $data, function ($message) use($data) {
        //     $message->from('duysangtao2001@gmail.com', 'DiDiShop');
        //     $message->to($this->email, $this->email);
        //     $message->subject('Test Mail');
        // });

    }
}
