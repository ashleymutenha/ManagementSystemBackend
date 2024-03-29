<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/allMembersMobile', [MemberController::class,'getAllMembers'])->name('allMembersMobile');
Route::post('/mobileUserRegister',[MemberController::class ,'mobileAppRegister'])->name('mobileAppRegister');
Route::post('/updateUser', [MemberController::class,'updateUser'])->name('updateUser');
Route::get('/contributions/{username}', [ContributionsController::class,'getUserContributions'])->name('_userContributions');



// Route::get('/mobileUserRegister',[MemberController::class ,'mobileAppRegister'])->name('mobileAppRegister');

