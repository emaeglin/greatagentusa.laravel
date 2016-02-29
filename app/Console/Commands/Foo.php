<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Lead;

class Foo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'foo:do';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $TwilioClient = new Services_Twilio(
            'ACefa52f762fcdc23583853810fb937dba', 
            '2621455c6bea1ccfbbdf12241b529185', 
            '2010-04-01'
        );
        
        try {
            // Initiate a new outbound call
            $call = $TwilioClient->account->calls->create(
                '+380682230411', // The number of the phone initiating the call
                '+380682230411', // The number of the phone receiving call
                'https://demo.twilio.com/welcome/voice/'
            );
            
            $this->info($call->id);
        } catch (Exception $e) {
            return false;
        }
    }
}
