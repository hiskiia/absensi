<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsentTeachers2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absent_teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->time('time_in')->nullable();
            $table->integer('teachers_id');
            $table->string('type');
            $table->string('is_out')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('absent_teachers_2');
    }
}
