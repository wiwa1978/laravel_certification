<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UserTableSeeder.
 */
class ProductTableSeeder extends Seeder
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
    
        $products = [
            [
                'id'                    => 100,   
                'name'                  => 'AWS Solution Architect - Associate',
                'small_description'     => 'Small description for Solution Architect - Associate',
                'long_description'      => 'Long description for Solution Architect1 - Associate',
                'features'              => 'Features for Solution Architect - Associate',
                'price'                 => '1999',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 101, 
                'name'                  => 'AWS Systops Administrator - Associate',
                'small_description'     => 'Small description for Systops Administrator - Associate',
                'long_description'      => 'Long description for Systops Administrator - Associate',
                'features'              => 'Features for Systops Administrator - Associate',
                'price'                 => '1999',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 102,
                'name'                  => 'AWS Developer - Associate',
                'small_description'     => 'Small description for Developer - Associate ',
                'long_description'      => 'Long description for Developer - Associate ',
                'features'              => 'Features description for Developer - Associate ',
                'price'                 => '1999',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 103, 
                'name'                  => 'Bundle all products',
                'small_description'     => 'Small description for all products',
                'long_description'      => 'Long description for all products',
                'features'              => 'Features description for all products',
                'price'                 => '4999',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
        ];

        DB::table('products')->insert($products);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
