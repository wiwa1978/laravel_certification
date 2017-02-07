<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class AnswerTableSeeder.
 */
class AnswerTableSeeder extends Seeder
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
    
        $answers = [
            [
                'id'                    => 49,   
                'question_id'           => 10000,
                'option_id'             => 1,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 50,   
                'question_id'           => 10000,
                'option_id'             => 2,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 51,   
                'question_id'           => 10001,
                'option_id'            => 4,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 52,   
                'question_id'           => 10002,
                'option_id'            => 7,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 53,   
                'question_id'           => 10003,
                'option_id'            => 9,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 54,   
                'question_id'           => 10004,
                'option_id'            => 10,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 55,   
                'question_id'           => 10005,
                'option_id'            => 13,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 56,   
                'question_id'           => 10006,
                'option_id'            => 16,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 57,   
                'question_id'           => 10007,
                'option_id'            => 18,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 58,   
                'question_id'           => 10008,
                'option_id'            => 21,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 59,   
                'question_id'           => 10009,
                'option_id'            => 23,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 60,   
                'question_id'           => 10010,
                'option_id'            => 25,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 61,   
                'question_id'           => 10011,
                'option_id'            => 30,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 62,   
                'question_id'           => 10012,
                'option_id'            => 32,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 63,   
                'question_id'           => 10013,
                'option_id'            => 34,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 64,   
                'question_id'           => 10014,
                'option_id'            => 35,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 65,   
                'question_id'           => 10015,
                'option_id'            => 37,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 66,   
                'question_id'           => 10016,
                'option_id'            => 40,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 67,   
                'question_id'           => 10017,
                'option_id'            => 42,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 68,   
                'question_id'           => 10018,
                'option_id'            => 44,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 69,   
                'question_id'           => 10019,
                'option_id'            => 46,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 70,   
                'question_id'           => 10020,
                'option_id'            => 47,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 71,   
                'question_id'           => 10021,
                'option_id'            => 50,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 72,   
                'question_id'           => 10022,
                'option_id'            => 54,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 73,   
                'question_id'           => 10023,
                'option_id'            => 57,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 74,   
                'question_id'           => 10024,
                'option_id'            => 58,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 75,   
                'question_id'           => 10025,
                'option_id'            => 61,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 76,   
                'question_id'           => 10026,
                'option_id'            => 63,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 77,   
                'question_id'           => 10027,
                'option_id'            => 67,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 78,   
                'question_id'           => 10028,
                'option_id'            => 70,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 79,   
                'question_id'           => 10029,
                'option_id'            => 74,
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ]

        ];

        DB::table('answers')->insert($answers);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
