<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAuth;
use App\Models\employee;
use Illuminate\Support\Facades\Route;

/**
 * Page Pour Athetification
 */

Route::get('/', function () {
        // $employees=employee::all();
        // dd($employees);
        return view('pageAthentification.Athetification');
        
    })->name('index');

Route::get('/user/login', [UserController::class, 'showLoginForm'])->name('login');
Route::middleware(App\Http\Middleware\CheckAuth::class)->post('/user/login',[UserController::class,'checkUser'])->name('loginUser');

// middleware([App\Http\Middleware\CheckAuth::class])->
// // add user
// Route::get('/user/add',[UserController::class,'pageAddUser'])->name('addUser');
// // send the data
// Route::post('/user/send',[UserController::class,'insertUser'])->name('insertUserToDb');
// //delete user
// Route::get('/user/delete/{id}',[UserController::class,'deleteUser'])->name('deletePage');
// // delete user from db
// Route::delete('/user/deleteFromDB/{id}',[UserController::class,'getIdForDelete'])->name('removeDB');
// // edit page
// Route::get('/user/edit/{employee}',[UserController::class,'pageEdit'])->name('edit');
// // update page
// Route::put('/user/update/{employee}',[UserController::class,'pageupdate'])->name('update');
// // setting page
// Route::get('/user/setting',[UserController::class,'getPageSettign'])->name('setting');
// //setting page retrieve user
// Route::get('/user/retrieve',[UserController::class,'getPageRetrieve'])->name('retrieve');
// // setting page retrieveEmp 
// Route::get('/user/retrievEmp/{id}',[UserController::class,'pageRetrievEmp'])->name('retrievEmp');
// // post password for change
// Route::post('/admin/sendPassword',[AdminController::class,'getPassowrdForChanged'])->name('sendPassword');
//Individiual Route Middleware

// Route::middleware('checkauth')->group(function(){


// dashboard
// middleware([App\Http\Middleware\CheckAuth::class])->
Route::middleware(['auth:admin'])->get('/dashboard', function () {
    $employees=employee::all();
    return view('index',compact('employees'));
})->name('indexDashboard');
// add user
Route::middleware(['auth:admin'])->group(function(){
    Route::get('/user/add',[UserController::class,'pageAddUser'])->name('addUser');
    // send the data
    Route::post('/user/send',[UserController::class,'insertUser'])->name('insertUserToDb');
    //delete user
    Route::get('/user/delete/{id}',[UserController::class,'deleteUser'])->name('deletePage');
    // delete user from db
    Route::delete('/user/deleteFromDB/{id}',[UserController::class,'getIdForDelete'])->name('removeDB');
    // edit page
    Route::get('/user/edit/{employee}',[UserController::class,'pageEdit'])->name('edit');
    // update page
    Route::put('/user/update/{employee}',[UserController::class,'pageupdate'])->name('update');
    // setting page
    Route::get('/user/setting',[UserController::class,'getPageSettign'])->name('setting');
    //setting page retrieve user
    Route::get('/user/retrieve',[UserController::class,'getPageRetrieve'])->name('retrieve');
    // setting page retrieveEmp 
    Route::get('/user/retrievEmp/{id}',[UserController::class,'pageRetrievEmp'])->name('retrievEmp');
    // post password for change
    Route::post('/admin/sendPassword',[AdminController::class,'getPassowrdForChanged'])->name('sendPassword');
    Route::get('/user/alluser',[UserController::class,'showAllUser'])->name("getAllUser");
    Route::get('/user/logout',[UserController::class,'logOutFunction'])->name('logout');

    Route::get('/user/getUsers',[UserController::class,'getUsers'])->name('userRoute');

});
// });
