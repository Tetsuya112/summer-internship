<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
   public function all()
   {
       return response()->json(Employee::all()->toArray(),200);
   }

   public function res(Request $request){
       $family = $request->input('family_name');
       $given = $request->input('given_name');

       $results = Employee::where('family_name_kana', $family)
           ->where('given_name_kana', $given)
           ->get();

       //dd($results->toArray());

       if ( count($results)==0){
           return response()->json("従業員情報を取得できません。",500, [], JSON_UNESCAPED_UNICODE);
       }else {
           return response()->json($results,200, [], JSON_UNESCAPED_UNICODE);
       }
   }
}
