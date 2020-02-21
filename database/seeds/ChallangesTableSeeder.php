<?php

use App\Model\Challange;
use Illuminate\Database\Seeder;

class ChallangesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Challange::truncate();
        Challange::insert([
            [
                'id'       => '1',
                'question' => 'q1',
                'answer'   => 'a1',
                'type'     => 'clue'
            ],
            [
                'id'       => '2',
                'question' => 'q2',
                'answer'   => 'a2',
                'type'     => 'clue'
            ],
            [
                'id'       => '3',
                'question' => 'q3',
                'answer'   => 'a3',
                'type'     => 'clue'
            ],
            [
                'id'       => '4',
                'question' => 'q4',
                'answer'   => 'a4',
                'type'     => 'activity'
            ],
            [
                'id'       => '5',
                'question' => 'q5',
                'answer'   => 'a5',
                'type'     => 'activity'
            ],
            [
                'id'       => '6',
                'question' => 'q6',
                'answer'   => 'a6',
                'type'     => 'activity'
            ],
        ]);
    }
}
