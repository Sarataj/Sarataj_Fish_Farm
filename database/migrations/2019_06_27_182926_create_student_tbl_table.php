<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_tbl', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('student_name');
            $table->string('student_roll');
            $table->string('student_email');
            $table->string('student_phone');
            $table->string('student_address');
            $table->string('student_image');
            $table->string('student_password');
            $table->string('parent_name');
            $table->string('parent_email');
            $table->string('parent_password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_tbl');
    }
}
