<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('companies')->insert([
            'id_company' => 1,
            'company' => 2,
        ]);
    }
}
