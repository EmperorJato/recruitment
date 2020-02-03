<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('src1');
            $table->string('src2');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('phone');
            $table->date('birthdate');
            $table->string('email')->unique();
            $table->tinyInteger('gender');
            $table->tinyInteger('marital_status');
            $table->string('graduated');
            $table->string('course');
            $table->string('year_grad');
            $table->text('present_address');
            $table->text('home_address');
            $table->string('work_exp');
            $table->date('from');
            $table->date('to');
            $table->string('person');
            $table->string('person_phone');
            $table->text('person_address');
            $table->string('relationship');
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
        Schema::dropIfExists('applicants');
    }
}
