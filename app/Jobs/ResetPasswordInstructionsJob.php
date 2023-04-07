<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use App\Mail\RegisterInstructions;
use App\Mail\ResetPasswordInstructions;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ResetPasswordInstructionsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public User $user
    ) {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $resetPassword = new ResetPasswordInstructions($this->user);
        Mail::to($this->user->email)->send($resetPassword);
    }
}
