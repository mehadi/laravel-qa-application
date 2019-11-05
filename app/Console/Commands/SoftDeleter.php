<?php

namespace App\Console\Commands;

use App\Answer;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SoftDeleter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:softdelete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for soft deleting question.';

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
        * Get last 24 hour data if the ans is empty or null soft delete the answer
        */
        $answers = Answer::where('created_at', '>=', Carbon::now()->subHours(24))->get();
        foreach ($answers as $answer) {
            if ($answer->answer == null) {
                Answer::destroy($answer->id);;
            }
        }
    }
}
