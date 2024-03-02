<?php

use App\Http\Controllers\AddbidController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\MybidController;
use App\Http\Controllers\NewbidController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\Newbid;
use App\Models\Newbids;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\userNewbids;


######################################################

// Common Routes naming
// index - show all data or students
// show - show a single data or student
// create - show a form to add a new student
// store - store a data
// edit - show a form to a data
// update - update a data
// destroy - delete a data


// Login/Registration ###############################

Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class, 'process']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/store', [UserController::class, 'store']);

// Pages ###############################

Route::get('/', [UserController::class, 'home']);
Route::get('/properties', [UserController::class, 'properties']);
Route::get('/feature01', [UserController::class, 'feature01']);
Route::get('/feature02', [UserController::class, 'feature02']);
Route::get('/feature03', [UserController::class, 'feature03']);
Route::get('/bidding01', [UserController::class, 'bidding01']);
Route::get('/bidding02', [UserController::class, 'bidding02']);
Route::get('/company', [UserController::class, 'company']);
Route::get('/agents', [UserController::class, 'agents']);
Route::get('/terms', [UserController::class, 'terms']);
Route::get('/contactus', [UserController::class, 'contactus']);
Route::get('/userdb', [UserController::class, 'userdb']);
Route::get('/admin', [UserController::class, 'admin']);

// Addbid ############################################################

Route::get('user_currentbidding', [AddbidController::class, 'user_currentbidding'])->middleware('auth');
Route::get('admin_currentbidding', [AddbidController::class, 'admin_currentbidding'])->middleware('auth');
Route::get('/bidding01', [AddbidController::class, 'createbid']);
Route::post('/bidding01', [AddbidController::class, 'storebid']);
Route::get('/addbid/{id}', [AddbidController::class, 'show']);
Route::put('/addbid/{addbid}', [AddbidController::class, 'update']);
Route::delete('/addbid/{addbid}', [AddbidController::class, 'destroy']);






