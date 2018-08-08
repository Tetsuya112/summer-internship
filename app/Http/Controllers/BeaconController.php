<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beacon;
use App\Employee;


class BeaconController extends Controller
{
    public function reg(Request $request, $family_name, $given_name){

        $request = $request->toArray();

//        echo $request['major'];
//        echo $request['minor'];
//        echo $family_name;
//        echo $given_name;
//        exit;


        $requestmajor = $request->input('major');
        $requestminor = $request->input('minor');

        $results = Beacon::where('major', $requestmajor)
            ->where('minor', $requestminor)
            ->get();



        if ( count($results)==0){
            return response()->json("ビーコンテーブルから情報を取得できません。",500, [], JSON_UNESCAPED_UNICODE);
        }else {
            $position = Beacon::where('major', $requestmajor)
                ->where('minor', $requestminor)
                ->value('position');
            $id = Beacon::where('major', $requestmajor)
                ->where('minor', $requestminor)
                ->value('id');
            $count = Employee::where('beacon_id', $id)
                ->get();
            if (count($count)==0){
                return response()->json("従業員テーブルから情報を取得できません。",500, [], JSON_UNESCAPED_UNICODE);
            }else {
                Employee::where('beacon_id', $id)
                    ->update(['position' => $position]);
            }
        }
    }
}
