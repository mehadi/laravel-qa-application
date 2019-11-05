<?php

namespace App\Console\Commands;

use App\Answer;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CheckAnswer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:checkanswer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to check answer and send an email to admin.';

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
        /*
         * Get last 48 hour data and send report to admin
         */
        $answers = Answer::where('created_at', '>=',  Carbon::now()->subHours(48))->get();
        $last_five = Answer::where('created_at', '>=',  Carbon::now()->subHours(48))->orderBy('id','DESC')->take(5)->get();

        /*
         * Email Data
         * */
        $email_data = array(
            'name' => "Admin",
            'email' => "bdmehadih@gmail.com",
            'count' => $answers->count(),
            'last_five'=>$last_five
        );

        /*
         * Sending mail with email template
         * */

        Mail::send('email.report', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'], $email_data['name'])
                ->subject('Welcome to QA APP')
                ->from('qaapp@gmail.com', 'QA APP');
        });
    }
}
