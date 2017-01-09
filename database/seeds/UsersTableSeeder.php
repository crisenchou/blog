<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::find('crisen@crisen.org');
        if (!$user) {
            User::create([
                'name' => 'crisen',
                'email' => 'crisen@crisen.org',
                'password' => bcrypt('123456'),
            ]);
        }
    }
}
