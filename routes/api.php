<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\StudentController;

use App\Http\Controllers\Api\CourseController;

use App\Http\Controllers\Api\CurrentCourseController;

use App\Http\Controllers\Api\TeacherController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResources([
   'Students'=>StudentController::class,
]);

Route::apiResources([
    'Courses'=>CourseController::class,
]);

Route::apiResources([
    'Currentcourse'=>CurrentCourseController::class,
]);

Route::apiResources([
    'Teacher'=>TeacherController::class,
]);


