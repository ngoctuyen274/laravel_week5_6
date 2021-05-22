<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 1000000; $i++) { 
            DB::table('companies')->insert([
                'company_name'  => 'ABC',
                'company_web'  => 'ABC',
                'company_address'  => 'ABC',
                'company_code'  => 'ABC',
                'company_phone'  => '0123456789',
            ]);
        }
    }
}
