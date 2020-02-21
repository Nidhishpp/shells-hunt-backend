<?php

use App\Model\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::insert([
            [
                'id'       => '1',
                'name'     => 'Team 1',
                'email'    => 'team1@shells.com',
                'password' => bcrypt('password')
            ],
            [
                'id'     => '2',
                'name'     => 'Team2',
                'email'    => 'team2@shells.com',
                'password' => bcrypt('password')
            ],
        ]);
    }
}
