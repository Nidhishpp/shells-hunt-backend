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
                'question' => 'I am an E-Commerce Brand for basic food item and you can shoot me.',
                'answer'   => '101',
                'type'     => 'clue'
            ],
            
            [
                'id'       => '2',
                'question' => 'If you see one of these, you should stop and gaze to watch it spout down.',
                'answer'   => '102',
                'type'     => 'clue'
            ],
            [
                'id'       => '3',
                'question' => 'The hierarchical portrayal of hubs and information.',
                'answer'   => '103',
                'type'     => 'clue'
            ],
            [
                'id'       => '4',
                'question' => 'Decimal proportional: 11010011 and where you can store things in me',
                'answer'   => '104',
                'type'     => 'clue'
            ],
            [
                'id'       => '5',
                'question' => 'Ascii Code of Bike: 80 66 48 51 85 55 51 49 51',
                'answer'   => '105',
                'type'     => 'clue'
            ],
            [
                'id'       => '6',
                'question' => 'A spot encompassed by 7 columns and 3 edges.',
                'answer'   => '106',
                'type'     => 'clue'
            ],
            [
                'id'       => '7',
                'question' => 'You can\'t C me yet I run behind to accumulate the extra unwanted things.',
                'answer'   => '107',
                'type'     => 'clue'
            ],
            [
                'id'       => '8',
                'question' => 'We only care about the errors and not the alerts.',
                'answer'   => '108',
                'type'     => 'clue'
            ],
            
            [
                'id'       => '9',
                'question' => 'For all your hard work and stumbles this will solve your bellys rumbles',
                'answer'   => '109',
                'type'     => 'clue'
            ],
            [
                'id'       => '10',
                'question' => 'I give you security as well as let your group score points/goals.',
                'answer'   => '110',
                'type'     => 'clue'
            ],
            [
                'id'       => '11',
                'question' => 'Throw the ball in the basketball loops four times.',
                'answer'   => 'sun',
                'type'     => 'activity'
            ],
            [
                'id'       => '12',
                'question' => 'Count the big black fishes in the pond',
                'answer'   => '11',
                'type'     => 'activity'
            ],
            [
                'id'       => '13',
                'question' => 'Go to the bike park, Meet the volunteer and complete your quiz to move on.',
                'answer'   => 'success',
                'type'     => 'activity'
            ],
           
            [
                'id'       => '14',
                'question' => 'Go to bus park and solve Jig-saw puzzle.',
                'answer'   => 'solve',
                'type'     => 'activity'
            ],
            [
                'id'       => '15',
                'question' => 'Find volunteer at the 2nd gate and complete your activity to get your keyword',
                'answer'   => 'reverse',
                'type'     => 'activity'
            ],
            [
                'id'       => '16',
                'question' => 'Count the dust bins in the ground',
                'answer'   => '4',
                'type'     => 'activity'
            ],
            [
                'id'       => '17',
                'question' => 'Count the number of the lamp post in chavara square.',
                'answer'   => '4',
                'type'     => 'activity'
            ],
            [
                'id'       => '18',
                'question' => 'Go to the basketball hoop and take a selfie with that volunteer and find your keyword',
                'answer'   => 'cute',
                'type'     => 'activity'
            ],
            [
                'id'       => '19',
                'question' => 'Find the tree name with laurel fig and find its family name',
                'answer'   => 'moraceae',
                'type'     => 'activity'
            ],
            [
                'id'       => '20',
                'question' => 'find the addition of binary number 10101010 and 10111011',
                'answer'   => '0101100101',
                'type'     => 'activity'
            ],
        ]);
    }
}
