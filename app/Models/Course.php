<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['Название','Номер','Стоимость'];

public function Teacher(){
    return $this->hasOne(Teacher::class);
}

public function student(){
    return $this->hasMany(Student::class);
}
}
