<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VueController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/courses', function () {

  // $course = Course::all();


  // foreach ($student as $student){
     //  echo 'Студенты:'.$student['Имя'].'<br>';
      // echo 'Курс:'.$student->course['Название'].'<br>';
      // echo'-----------------'.'<br>';
  // }

    //foreach ($course as $course ){
      //  echo 'course:'.$course['Название'].'<br>';
        //echo '<b>students:</b><br>';
        //foreach ($course->students as $student){
          //  echo $student['Имя'].'<br>';
        //}
        //echo 'teacher:'.$course->teacher['Имя'].'<br>';
        //echo '------------------'.'<br>';

  //  }
//});
//Route::get('/students', function () {
  //  $student = Student::all();
    //foreach ($student as $student){

      //  echo'student:'.$student['Имя'].'<br>';
        //echo '<b>course:</b>'.$student->course['Название'].'<br>';
        //echo 'teacher:'.$student->course->teacher['Имя'].'<br>';
        //echo'<form action="/destroy" method="post">  <button type="submit">Удалить</button></form>'.'<br>';


        //echo '---------------'.'<br>';
    //}


//});

//Route::post('/destroy',[StudentController::class,'destroy'])->name('destroy');


Route::get('/{any}',[VueController::class,'index'])->where('any','.*');


