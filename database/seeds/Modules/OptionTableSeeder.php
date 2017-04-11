<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class OptionTableSeeder.
 */
class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        //Add some products
    
        $options = [
            [
                'id'                    => 1,   
                'question_id'           => 10000,
                'option'                => 'Wim',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 2,   
                'question_id'           => 10000,
                'option'                => 'Tim',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 3,   
                'question_id'           => 10000,
                'option'                => 'Kim',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 4,   
                'question_id'           => 10001,
                'option'                => '4',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 5,   
                'question_id'           => 10001,
                'option'                => '7',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 6,   
                'question_id'           => 10002,
                'option'                => '4',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 7,   
                'question_id'           => 10002,
                'option'                => '6',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 8,   
                'question_id'           => 10003,
                'option'                => '6',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 9,   
                'question_id'           => 10003,
                'option'                => '12',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
                        [
                'id'                    => 10,   
                'question_id'           => 10004,
                'option'                => '3',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 11,   
                'question_id'           => 10004,
                'option'                => '4',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 12,   
                'question_id'           => 10005,
                'option'                => '50',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 13,   
                'question_id'           => 10005,
                'option'                => '40',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 14,   
                'question_id'           => 10005,
                'option'                => '10',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 15,   
                'question_id'           => 10006,
                'option'                => '21',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 16,   
                'question_id'           => 10006,
                'option'                => '22',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 17,   
                'question_id'           => 10007,
                'option'                => '30',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 18,   
                'question_id'           => 10007,
                'option'                => '31',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 19,   
                'question_id'           => 10008,
                'option'                => '295',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 20,   
                'question_id'           => 10008,
                'option'                => '293',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 21,   
                'question_id'           => 10008,
                'option'                => '294',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 22,   
                'question_id'           => 10009,
                'option'                => '45',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 23,   
                'question_id'           => 10009,
                'option'                => '44',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 24,   
                'question_id'           => 10009,
                'option'                => '43',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 25,   
                'question_id'           => 10010,
                'option'                => '15',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 26,   
                'question_id'           => 10010,
                'option'                => '16',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 27,   
                'question_id'           => 10010,
                'option'                => '14',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 28,   
                'question_id'           => 10011,
                'option'                => '3',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 29,   
                'question_id'           => 10011,
                'option'                => '5',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 30,   
                'question_id'           => 10011,
                'option'                => '4',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 31,   
                'question_id'           => 10012,
                'option'                => '4',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 32,   
                'question_id'           => 10012,
                'option'                => '6',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 33,   
                'question_id'           => 10012,
                'option'                => '5',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 34,   
                'question_id'           => 10013,
                'option'                => '12',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 35,   
                'question_id'           => 10014,
                'option'                => '3',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 36,   
                'question_id'           => 10014,
                'option'                => '2',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 37,   
                'question_id'           => 10015,
                'option'                => '40',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 38,   
                'question_id'           => 10015,
                'option'                => '30',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 39,   
                'question_id'           => 10016,
                'option'                => '21',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 40,   
                'question_id'           => 10016,
                'option'                => '22',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 41,   
                'question_id'           => 10017,
                'option'                => '21',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 42,   
                'question_id'           => 10017,
                'option'                => '31',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 43,   
                'question_id'           => 10018,
                'option'                => '296',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 44,   
                'question_id'           => 10018,
                'option'                => '294',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 45,   
                'question_id'           => 10019,
                'option'                => '45',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 46,   
                'question_id'           => 10019,
                'option'                => '44',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 47,   
                'question_id'           => 10020,
                'option'                => '13',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 48,   
                'question_id'           => 10020,
                'option'                => '14',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 49,   
                'question_id'           => 10020,
                'option'                => '11',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 50,   
                'question_id'           => 10021,
                'option'                => '26',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 51,   
                'question_id'           => 10021,
                'option'                => '36',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 52,   
                'question_id'           => 10021,
                'option'                => '16',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 53,   
                'question_id'           => 10022,
                'option'                => '99',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 54,   
                'question_id'           => 10022,
                'option'                => '100',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 55,   
                'question_id'           => 10022,
                'option'                => '101',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 56,   
                'question_id'           => 10023,
                'option'                => '102',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 57,   
                'question_id'           => 10023,
                'option'                => '120',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 58,   
                'question_id'           => 10024,
                'option'                => '33',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 59,   
                'question_id'           => 10024,
                'option'                => '34',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 60,   
                'question_id'           => 10024,
                'option'                => '32',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 61,   
                'question_id'           => 10025,
                'option'                => '42',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 62,   
                'question_id'           => 10025,
                'option'                => '43',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 63,   
                'question_id'           => 10026,
                'option'                => '42',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 64,   
                'question_id'           => 10026,
                'option'                => '32',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 65,   
                'question_id'           => 10026,
                'option'                => '52',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 66,   
                'question_id'           => 62,
                'option'                => 'Kim',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 67,   
                'question_id'           => 10027,
                'option'                => '49',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 68,   
                'question_id'           => 10027,
                'option'                => '59',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 69,   
                'question_id'           => 10027,
                'option'                => '69',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 70,   
                'question_id'           => 10028,
                'option'                => '400',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 71,   
                'question_id'           => 10028,
                'option'                => '401',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 72,   
                'question_id'           => 10028,
                'option'                => '402',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 73,   
                'question_id'           => 10029,
                'option'                => '42',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 74,   
                'question_id'           => 10029,
                'option'                => '43',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 75,   
                'question_id'           => 10029,
                'option'                => '44',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ]



        ];

        DB::table('options')->insert($options);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
