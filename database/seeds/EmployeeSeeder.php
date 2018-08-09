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
        ['family_name'=>'奥永','given_name'=>'哲哉','family_name_kana'=>'おくなが','given_name_kana'=>'てつや','beacon_id'=>'','position'=>'アジアクエスト']
       ]);
        DB::table('employees')->insert([
            ['family_name'=>'坂本','given_name'=>'勇人','family_name_kana'=>'さかもと','given_name_kana'=>'はやと','beacon_id'=>'','position'=>'東京ドーム']
        ]);
        DB::table('employees')->insert([
            ['family_name'=>'千原','given_name'=>'ジュニア','family_name_kana'=>'ちはら','given_name_kana'=>'じゅにあ','beacon_id'=>'','position'=>'パソコンの前']
        ]);



//
//              DB::table('beacons')->insert([
//        ['major'=>'334',"minor"=>"44","position"=>"office"]
//       ]);

    }
}
