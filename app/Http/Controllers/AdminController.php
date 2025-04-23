<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class AdminController extends Controller
{
    public function getPassowrdForChanged(Request $request){
        
        $formFaild=$request->validate([
            'password'=>"required|confirmed"
        ]);
        
            $passwordAdmin=DB::table('admins')->where('typeUser','user')->first();
           
            $passwordAdmin=Hash::make($request->password);
            DB::table('admins')->where('typeUser','user')->update(['password'=>$passwordAdmin]);
            return to_route('setting')->with('success','Password is Updated');
           
        // }else{
        //     return to_route('setting');
        // }
    }
  
}
