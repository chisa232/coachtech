<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function post(Request $request)
    {
        $now=Carbon::now();
        $hashed_password=Hash::make($request->password);
        $parm=[
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$hashed_password,
            "profile"=>$request->profile,
            "created_at"=>$now,
            "updated_at"=>$now,
        ];
        DB::table('users')->insert($parm);
        return response()->json([
            'message'=>'User created successfully',
            'data'=>$parm
        ],200);
    }
}
