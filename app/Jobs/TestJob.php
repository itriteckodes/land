<?php

namespace App\Jobs;

use App\Models\Agent;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class TestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $time = null;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = ['code' => 'adf'];

            Mail::send('check', $data, function ($message) use ($data){
                $message->from('EagleCity@support.com', 'Eagle City');
                $message->to('ihuzaifaaslam@gmail.com', 'huzaifa')
                ->subject('Reset Password');
            });
    }
}
