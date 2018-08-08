<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('employees')->insert([
        ['family_name'=>'山田','given_name'=>'太郎','family_name_kana'=>'やまだ','given_name_kana'=>'たろう']
       ]);

    }
}
