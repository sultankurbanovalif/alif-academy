<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class BirthDayCongratsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:birthday-init {--ids=*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        dd($this->option('ids'));
        $users = User::all();
        foreach ($users as $user) {
            $user->birthday = true;
            $user->save();
        }

        return CommandAlias::SUCCESS;
    }
}
// SOLID
//
