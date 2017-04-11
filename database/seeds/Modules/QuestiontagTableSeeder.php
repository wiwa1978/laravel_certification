<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class ExamTableSeeder.
 */
class QuestiontagTableSeeder extends Seeder
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
    
        $questiontags = [
            [
                'id'               => 1,   
                'question_id'      => 10000,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 2,   
                'question_id'      => 10000,
                'tag_id'           => 2,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 3,   
                'question_id'      => 10001,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 4,   
                'question_id'      => 10001,
                'tag_id'           => 2,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 5,   
                'question_id'      => 10002,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 6,   
                'question_id'      => 10002,
                'tag_id'           => 2,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 7,   
                'question_id'      => 10003,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 8,   
                'question_id'      => 10004,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 9,   
                'question_id'      => 10005,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 10,   
                'question_id'      => 10006,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 11,   
                'question_id'      => 10007,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 12,   
                'question_id'      => 10008,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 13,   
                'question_id'      => 10009,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 14,   
                'question_id'      => 10010,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 15,   
                'question_id'      => 10011,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 16,   
                'question_id'      => 10012,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 17,   
                'question_id'      => 10013,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 18,   
                'question_id'      => 10014,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 19,   
                'question_id'      => 10015,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 20,   
                'question_id'      => 10016,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 21,   
                'question_id'      => 10017,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 22,   
                'question_id'      => 10018,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 23,   
                'question_id'      => 10019,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 24,   
                'question_id'      => 10020,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 25,   
                'question_id'      => 10021,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 26,   
                'question_id'      => 10022,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 27,   
                'question_id'      => 10023,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 28,   
                'question_id'      => 10024,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 29,   
                'question_id'      => 10025,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 30,   
                'question_id'      => 10026,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 31,   
                'question_id'      => 10027,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 32,   
                'question_id'      => 10028,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ],
            [
                'id'               => 33,   
                'question_id'      => 10029,
                'tag_id'           => 1,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ]

        ];

        DB::table('question_tags')->insert($questiontags);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
