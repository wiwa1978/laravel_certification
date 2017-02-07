<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class AccessTableSeeder.
 */
class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        $this->call(ProductTableSeeder::class);
        $this->call(PurchaseTableSeeder::class);
        $this->call(ExamTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(AnswerTableSeeder::class);


        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
