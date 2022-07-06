<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class createUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user {name} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an User in the DataBase';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $password = Hash::make($this->argument()['password']);

        $test_if_user_exist = User::where('name', '=', $this->argument()['name'])->first();

        if ($test_if_user_exist) {
            echo "\n";
            echo "\e[1;41m                                  \e[0m \n";
            echo "\e[1;41m      Name already exist      \e[0m \n";
            echo "\e[1;41m                                  \e[0m \n";
            echo "\n";
            return;
        }

        User::create([
            'name' => $this->argument()['name'],
            'email' => $this->argument()['email'],
            'password' => $password
        ]);

        $user = User::where('name', '=', $this->argument()['name'])->first();

        echo "\n";
        echo "User \e[1;33m" . $user->name . "\e[0m successfully created.\n ";
        echo "\n";
    }
}
