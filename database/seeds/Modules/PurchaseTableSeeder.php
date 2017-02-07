<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UserTableSeeder.
 */
class PurchaseTableSeeder extends Seeder
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
    
        $purchases = [
            [
                'user_id'               => 3,
                'product_id'            => 100,
                'stripe_transaction_id' => '_jbshvScW_8961',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'user_id'               => 3,
                'product_id'            => 101,
                'stripe_transaction_id' => '_zvgvKS_2536',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'user_id'               => 4,
                'product_id'            => 102,
                'stripe_transaction_id' => '_asgvMP_6811',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'user_id'               => 4,
                'product_id'            => 103,
                'stripe_transaction_id' => '_bffgMXX_6811',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'user_id'               => 5,
                'product_id'            => 100,
                'stripe_transaction_id' => '_zrtdXU_6811',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],

        ];

        DB::table('purchases')->insert($purchases);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}

