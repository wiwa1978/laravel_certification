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
                'name'                  => 'Product 1',
                'small_description'     => 'Small description for Product 1',
                'long_description'      => 'Long description for Product 1',
                'features'              => 'Features for Product 1',
                'price'                 => '1999',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'name'                  => 'Product 2',
                'small_description'     => 'Small description for Product 2',
                'long_description'      => 'Long description for Product 2',
                'features'              => 'Features for Product 2',
                'price'                 => '1999',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'name'                  => 'Product 3',
                'small_description'     => 'Small description for Product 3',
                'long_description'      => 'Long description for Product 3',
                'features'              => 'Features description for Product 3',
                'price'                 => '1999',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'name'                  => 'Bundle all products',
                'small_description'     => 'Small description for all products,
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
