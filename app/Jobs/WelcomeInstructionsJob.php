<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\WelcomeInstructions;
use App\Models\Form\FormRegister;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class WelcomeInstructionsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public FormRegister $userRegistered
    ) {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $mailWelcome = new WelcomeInstructions($this->userRegistered);
        Mail::to($this->userRegistered->email)->send($mailWelcome);
    }
}
