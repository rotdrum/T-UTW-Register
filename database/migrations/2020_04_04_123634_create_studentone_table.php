<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentone', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id');

            $table->string('tname');
            $table->string('fname');
            $table->string('lname');
            $table->string('number_id');

            $table->string('name_school');
            $table->string('district_school');
            $table->string('province_school');

            $table->string('home_id');
            $table->string('group');
            $table->string('road');
            $table->string('parish');
            $table->string('district');
            $table->string('province');
            $table->string('postcode');
            $table->string('tel');

           
            $table->double('thai_onet', 10, 2);
            $table->double('math_onet', 10, 2);
            $table->double('science_onet', 10, 2);
            $table->double('eng_onet', 10, 2);
            $table->double('sum_onet', 10, 2);

            $table->string('pic_file');
            $table->string('end_file');
            $table->string('home_file');
            $table->string('number_file');
            $table->string('onet_file');

            $table->integer('status');
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
        Schema::dropIfExists('studentone');
    }
}
