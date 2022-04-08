<?php

namespace App\Listeners;

use App\Events\PostTodo;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendMailPostTodo
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
     * @param  \App\Events\PostTodo  $event
     * @return void
     */
    public function handle(PostTodo $event)
    {
        //
    }
}
