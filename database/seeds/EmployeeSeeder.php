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
        ['family_name'=>'月成','given_name'=>'健太','family_name_kana'=>'つきなり','given_name_kana'=>'けんた','beacon_id'=>'1']
       ]);




       //       DB::table('beacons')->insert([
//        ['major'=>'33',"minor"=>"4","position"=>"cafe"]
//       ]);

    }
}
