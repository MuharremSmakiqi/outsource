<?php

namespace App\Console\Commands;
use App\Notifications\NotifyInactiveUser;
use Carbon\Carbon;
use App\User;
use Illuminate\Console\Command;

class WarningEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:inactive-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email inactive users';

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
        $limit = Carbon::now()->subDay(2); 
        $inactive_user = User::where('last_login_at', '<', $limit)
        ->where('role', '=', 'User')
        ->get();

        foreach ($inactive_user as $user) {
            $user->notify(new NotifyInactiveUser());
        }
    }
}
