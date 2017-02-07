<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class ExamTableSeeder.
 */
class ExamTableSeeder extends Seeder
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
    
        $exams = [
            [
                'id'                    => 1000,   
                'product_id'            => 100,
                'exam_name'             => 'AWS Solution Architect Exam - Practice',
                'exam_code'             => 'AWS-SA-PRACTICE',
                'description'           => 'Questions relevant to the exam AWS Solution Architect Exam',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 1001,   
                'product_id'            => 100,
                'exam_name'             => 'AWS Solution Architect Exam - Real',
                'exam_code'             => 'AWS-SA-REAL',
                'description'           => 'Questions relevant to the exam AWS Solution Architect Exam',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 1002,   
                'product_id'            => 101,
                'exam_name'             => 'AWS Sysops Architect Exam - Practice',
                'exam_code'             => 'AWS-SYS-PRACTICE',
                'description'           => 'Questions relevant to the exam AWS Sysops Architect Exam',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 1003,   
                'product_id'            => 101,
                'exam_name'             => 'AWS Sysops Architect Exam - Real',
                'exam_code'             => 'AWS-SYS-REAL',
                'description'           => 'Questions relevant to the exam AWS Sysops Architect Exam',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ]

        ];

        DB::table('exams')->insert($exams);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
