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
                'id'         => '1',
                'name'       => 'Team 1',
                'email'      => 'team1@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '2',
                'name'       => 'Team2',
                'email'      => 'team2@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '3',
                'name'       => 'Team3',
                'email'      => 'team3@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '4',
                'name'       => 'Team4',
                'email'      => 'team4@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '5',
                'name'       => 'Team5',
                'email'      => 'team5@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '6',
                'name'       => 'Team6',
                'email'      => 'team6@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
        ]);
    }
}
