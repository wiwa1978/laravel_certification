<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UserTableSeeder.
 */
class CertificationTableSeeder extends Seeder
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
    
        $certifications = [
            [
                'id'                    => 100,   
                'name'                  => 'Certification 100',
                'small_description'     => 'Small description for Certification 100',
                'long_description'      => 'Long description for Certification 100',
                'features'              => 'Features for Certification 100',
                'price'                 => '1999',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 101, 
                'name'                  => 'Certification 101',
                'small_description'     => 'Small description for Certification 101',
                'long_description'      => 'Long description for Certification 101',
                'features'              => 'Features for Certification 101',
                'price'                 => '1999',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 102,
                'name'                  => 'Certification 102',
                'small_description'     => 'Small description for Certification 102',
                'long_description'      => 'Long description for Certification 102',
                'features'              => 'Features description for Certification 100',
                'price'                 => '1999',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
            [
                'id'                    => 103, 
                'name'                  => 'Bundle all certification - 103',
                'small_description'     => 'Small description for bundle all Certification - 103',
                'long_description'      => 'Long description for bundle all Certification - 103',
                'features'              => 'Features description bundle all Certification - 103',
                'price'                 => '4999',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ],
        ];

        DB::table('certifications')->insert($certifications);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
