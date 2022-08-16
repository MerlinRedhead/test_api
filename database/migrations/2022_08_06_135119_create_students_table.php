<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Имя');
            $table->string('Адрес');
            $table->string('Телефон');
            $table->integer('Номер_зачетки');
            $table->float('Средняя_успеваемость');
            $table->integer('Оценки')->nullable();
            $table->integer('Финальная_оценка')->nullable();
            $table->foreignId('course_id')->constrained();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
