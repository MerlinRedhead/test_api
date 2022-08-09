<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class CurrentCourse extends Model
{


    use HasFactory;

    public function Student(){
        return $this->belongsTo(Student::class);
    }

    public function Course(){
        return $this->belongsTo(Course::class);
    }





}
