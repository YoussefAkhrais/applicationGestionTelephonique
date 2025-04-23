<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Admin;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function pageAddUser(){
        return view('pages.pageAddUser');
    }
    public function insertUser(EmployeeRequest $request){
        
        $formFaild=$request->validated();
        if(!empty($formFaild)){
            employee::create($formFaild);
            return redirect()->route('getAllUser')->with('success','insert user is successed');
        }else{
            return redirect()->route('addUser');
        }

    }
    public function deleteUser(Request $request){
        $id=$request->id;
        return view('pages.deleteUserPages',compact('id'));
           
    }
    // function remove user from DB
    public function getIdForDelete(Request $request){
        $user=employee::find($request->id);
        if($user){
            $user->delete();
            return redirect()->route('getAllUser')->with('successDelete','this employee is has been deleted');

        }else{
                return false;
        }
    
    }
    // edit user
    public function pageEdit(employee $employee){
       return view('pages.pageUpdate',compact('employee'));
    }
    // update user function
    public function pageupdate(EmployeeRequest $request,employee $employee){
        $formFaild=$request->validated();
        $employee->fill($formFaild)->save();
        return to_route('getAllUser')->with('success','$formFaild->nameUser is removed');
    }
    public function getPageSettign(){
        return view('pages.settingPage');
    }
    // page retrieve user
     public function getPageRetrieve(){
        // recuper all user deleted
        $employees=employee::onlyTrashed()->get();
        
        return view('pages.pageRetrieveUser',compact('employees'));
     }
    // page pageRetrievEmp 
     public function pageRetrievEmp($id){
        // search user with id and recuper in database
        $employee=employee::withTrashed()->find($id);
       
        if($employee){
                if($employee->trashed()){
                    $employee->restore();
                }
                return to_route('getAllUser')->with('success','this employee is restore successed');
        }
        
     }

     public function showLoginForm(){
        return view('pageAthentification.Athetification');
     }

     //check user
     public function checkUser(Request $request ){
       
        $credentials = ['nameAdmin' => $request->nameAdmin, 'password' =>$request->password];
        if (Auth::guard('admin')->attempt($credentials)) {
            $employees=employee::all();
            return view('index',compact('employees'));
        }
        return back()->withErrors(['message' => 'Invalid credentials']);       
     }
     public function showAllUser(){
        $employees=employee::all();

        return view('pages.viewAllUser',compact('employees'));
     }

     public function logOutFunction(){
        Auth::guard('admin')->logout();
        return to_route('index');
     }

     public function getUsers(){
        $employees=employee::all();
        return view('pages.usersPage',compact('employees'));
     }
}
