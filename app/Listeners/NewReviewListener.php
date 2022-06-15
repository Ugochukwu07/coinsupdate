<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\NewReviewNotification;
use App\Notifications\NewReviewForAdminNotification;

class NewReviewListener
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
    public function handle($event)
    {
        $review = $event->review;

        //toastr
        toastr()->success('Review Submitted Successfully');

        $review->notify(new NewReviewNotification());
        
        /*
        $admin = User::where('admin', 1)->first();
        $admin->notify(new NewReviewForAdminNotification());
        */
    }
}
