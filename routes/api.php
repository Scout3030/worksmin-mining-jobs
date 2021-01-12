<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::apiResource('experience', 'WorkExperienceController');
Route::apiResource('education', 'EducationController');
Route::apiResource('department', 'DepartmentController');
Route::apiResource('category', 'CategoryController');
Route::apiResource('subcategory', 'SubcategoryController');
Route::apiResource('type', 'JobTypeController');

Route::get('/types/{type}', 'JobController@jobByType')->name('job.by.type');



