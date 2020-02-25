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
                'type'     => 'clue'
            ],
            [
                'id'       => '5',
                'question' => 'q5',
                'answer'   => 'a5',
                'type'     => 'clue'
            ],
            [
                'id'       => '6',
                'question' => 'q6',
                'answer'   => 'a6',
                'type'     => 'activity'
            ],
            [
                'id'       => '7',
                'question' => 'q7',
                'answer'   => 'a7',
                'type'     => 'activity'
            ],
            [
                'id'       => '8',
                'question' => 'q8',
                'answer'   => 'a8',
                'type'     => 'activity'
            ],
            [
                'id'       => '9',
                'question' => 'q9',
                'answer'   => 'a9',
                'type'     => 'activity'
            ],
            [
                'id'       => '10',
                'question' => 'q10',
                'answer'   => 'a10',
                'type'     => 'activity'
            ],
        ]);
    }
}
