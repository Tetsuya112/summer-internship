<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beacon;
use App\Employee;


class BeaconController extends Controller
{
    public function reg(Request $request){
        $requestmajor = $request->input('major');
        $requestminor = $request->input('minor');

        $results = Beacon::where('major', $requestmajor)
            ->where('minor', $requestminor)
            ->get();

        if ( count($results)==0){
            return response()->json("ビーコンテーブルから情報を取得できません。",500, [], JSON_UNESCAPED_UNICODE);
        }else {
            $results = Employee::where('major', $requestmajor)
                ->where('minor', $requestminor)
                ->get();
        }
    }
}
