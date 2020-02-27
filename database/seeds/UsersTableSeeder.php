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
                'name'       => 'SH20_01',
                'email'      => 'sh2001@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '2',
                'name'       => 'SH20_07',
                'email'      => 'sh2007@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '3',
                'name'       => 'SH20_16',
                'email'      => 'sh2016@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '4',
                'name'       => 'SH20_15',
                'email'      => 'sh2015@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '5',
                'name'       => 'SH20_03',
                'email'      => 'sh2003@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '6',
                'name'       => 'SH20_02',
                'email'      => 'sh2002@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '7',
                'name'       => 'SH20_17',
                'email'      => 'sh2017@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '8',
                'name'       => 'SH20_04',
                'email'      => 'sh2004@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '9',
                'name'       => 'SH20_06',
                'email'      => 'sh2006@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
            [
                'id'         => '10',
                'name'       => 'SH20_09',
                'email'      => 'sh2009@shells.com',
                'password'   => bcrypt('password'),
                'previous'   => 'activity',
                'current_id' => '0'
            ],
        ]);
    }
}
