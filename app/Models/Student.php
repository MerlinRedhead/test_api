<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['Имя','Адрес','Телефон','Номер_зачетки','Средняя_успеваемость','course_id'];


    public function course(){
        return $this->belongsTo(Course::class);
    }
}

