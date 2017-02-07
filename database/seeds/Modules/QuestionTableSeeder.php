<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class QuestionTableSeeder.
 */
class QuestionTableSeeder extends Seeder
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
    
        $questions = [
            [
                'id'                    => 10000,   
                'exam_id'               => 1000,
                'question'              => '[AWS-SA-PRACTICE] What is your name?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10001,   
                'exam_id'               => 1000,
                'question'              => '[AWS-SA-PRACTICE] How much is 2+2?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10002,   
                'exam_id'               => 1000,
                'question'              => '[AWS-SA-PRACTICE] How much is 2+4?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10003,   
                'exam_id'               => 1000,
                'question'              => '[AWS-SA-PRACTICE] How much is 4+8?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10004,   
                'exam_id'               => 1000,
                'question'              => '[AWS-SA-PRACTICE] How much is 23-20?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10005,   
                'exam_id'               => 1000,
                'question'              => '[AWS-SA-PRACTICE] How much is 50-10??',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10006,   
                'exam_id'               => 1000,
                'question'              => '[AWS-SA-PRACTICE] How much is 20+2?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10007,   
                'exam_id'               => 1000,
                'question'              => '[AWS-SA-PRACTICE] How much is 29+2?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10008,   
                'exam_id'               => 1000,
                'question'              => '[AWS-SA-PRACTICE] How much is 2+292?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10009,   
                'exam_id'               => 1000,
                'question'              => '[AWS-SA-PRACTICE] How much is 22+22?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10010,   
                'exam_id'               => 1001,
                'question'              => '[AWS-SA-REAL] How much is 20-5?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10011,   
                'exam_id'               => 1001,
                'question'              => '[AWS-SA-REAL] How much is 2+2?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10012,   
                'exam_id'               => 1001,
                'question'              => '[AWS-SA-REAL] How much is 2+4?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10013,   
                'exam_id'               => 1001,
                'question'              => '[AWS-SA-REAL] How much is 4+8?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10014,   
                'exam_id'               => 1001,
                'question'              => '[AWS-SA-REAL] How much is 23-20?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10015,   
                'exam_id'               => 1001,
                'question'              => '[AWS-SA-REAL] How much is 50-10??',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10016,   
                'exam_id'               => 1001,
                'question'              => '[AWS-SA-REAL] How much is 20+2?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10017,   
                'exam_id'               => 1001,
                'question'              => '[AWS-SA-REAL] How much is 29+2?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10018,   
                'exam_id'               => 1001,
                'question'              => '[AWS-SA-REAL] How much is 2+292?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10019,   
                'exam_id'               => 1001,
                'question'              => '[AWS-SA-REAL] How much is 22+22?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10020,   
                'exam_id'               => 1002,
                'question'              => '[AWS-SA-REAL] How much is 3+10?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10021,   
                'exam_id'               => 1002,
                'question'              => '[AWS-SYS-PRACTICE] How much is 29-3?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10022,   
                'exam_id'               => 1002,
                'question'              => '[AWS-SYS-PRACTICE] How much is 50+50?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10023,   
                'exam_id'               => 1002,
                'question'              => '[AWS-SYS-PRACTICE] How much is 40+80?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10024,   
                'exam_id'               => 1002,
                'question'              => '[AWS-SYS-PRACTICE] How much is 43-10?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10025,   
                'exam_id'               => 1002,
                'question'              => '[AWS-SYS-PRACTICE] How much is 50-8??',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10026,   
                'exam_id'               => 1003,
                'question'              => '[AWS-SYS-REAL] How much is 21+21?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10027,   
                'exam_id'               => 1003,
                'question'              => '[AWS-SYS-REAL] How much is 28+21?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10028,   
                'exam_id'               => 1003,
                'question'              => '[AWS-SYS-REAL] How much is 200+200?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 10029,   
                'exam_id'               => 1003,
                'question'              => '[AWS-SYS-REAL] How much is 21+22?',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ]

        ];

        DB::table('questions')->insert($questions);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
