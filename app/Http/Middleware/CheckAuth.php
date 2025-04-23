<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CheckAuth
{
    public function handle(Request $request, Closure $next)
    {
            
      
        
                $formFaild=$request->validate([
                    "nameAdmin"=>"required",
                    "password"=>"required",
                ]);
                
                $nameUser=$request->nameAdmin;
                $password=$request->password;
                
                $credentials=["nameAdmin"=>$nameUser,"password"=>$password];
                
            //    dd(Auth::guard('admin')->attempt($credentials));
                if(!Auth::guard('admin')->attempt($credentials)){
                    return redirect()->route('login')->withErrors([
                        'user' => 'user name or password incorrect',
                    ]);
                }else{
                   
                    // if (Auth::guard('admin')->user()->typeUser === 'admin') {
                        $admin=Auth::guard('admin')->user();
                        // dd($admin->typeUser);
                        if($admin->typeUser === 'admin'){
                            // dd($admin->typeUser);
                       
                            return $next($request) ;

                        }elseif($admin->typeUser === 'user'){
                            return redirect('/user/getUsers');
                        }
                          return redirect()->route('/');
                    // }  
                }
            
            



        
     }
}
