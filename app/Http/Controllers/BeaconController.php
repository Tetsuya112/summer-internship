<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beacon;
use App\Employee;


class BeaconController extends Controller
{
    public function reg(Request $request, $family_name, $given_name){
        $requestmajor = $request->input('major');
        $requestminor = $request->input('minor');

        $results = Beacon::where('major', $requestmajor)
            ->where('minor', $requestminor)
            ->first();
        if ( !$results){
            return response()->json("ビーコンテーブルから情報を取得できません。",500, [], JSON_UNESCAPED_UNICODE);
        }else {

            $pot = $results->position;
            $id= $results->id;

            $emp=Employee::where('family_name_kana', $family_name)
                ->where('given_name_kana', $given_name)
                ->first();
            if (!$emp){
                return response()->json("従業員テーブルから情報を取得できません。", 500, [], JSON_UNESCAPED_UNICODE);
            }else {
                $emp->position = $pot;
                $emp->beacon_id = $id;
                $emp->save();
                //$emp->update(['position' => $pot]);
                return response()->json("success",200,[],JSON_UNESCAPED_UNICODE);
            }
        }
    }
}
