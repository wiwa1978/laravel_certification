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
                'certification_id'      => 100,
                'category_id'           => 1,    
                'exam_name'             => 'Exam 1000',
                'exam_code'             => 'Exam 1000',  
                'description'           => 'Questions relevant to the Exam 1000',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 1001,   
                'certification_id'      => 100,
                'category_id'           => 1, 
                'exam_name'             => 'Exam 1001',
                'exam_code'             => 'Exam 1001',
                'description'           => 'Questions relevant to the Exam 1001',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 1002,   
                'certification_id'      => 101,
                'category_id'           => 2,
                'exam_name'             => 'Exam 1002',
                'exam_code'             => 'Exam 1002',
                'description'           => 'Questions relevant to the Exam 1002',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 1003,   
                'certification_id'      => 101,
                'category_id'           => 2,    
                'exam_name'             => 'Exam 1003',
                'exam_code'             => 'Exam 1003',
                'description'           => 'Questions relevant to the Exam 1003',
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
