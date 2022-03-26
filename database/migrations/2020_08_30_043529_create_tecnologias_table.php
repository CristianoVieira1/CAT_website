<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnologias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uri');
            $table->string('titleCourse');
            $table->string('courseDurationFirst');
            $table->string('courseDurationSecond');
            $table->string('investmentFirst');
            $table->string('investmentSecond');
            $table->string('workload');
            $table->string('workloadDate');
            $table->string('titleFirst');
            $table->string('titleSecond');
            $table->text('titlethird');
            $table->text('video')->nullable();
            $table->text('a1First');
            $table->text('a1FirstHours');
            $table->text('a1Second');
            $table->text('a1SecondHours');
            $table->text('a1Third');
            $table->text('a1ThirdHours');
            $table->text('a1Four')->nullable();
            $table->text('a1FourHours')->nullable();
            $table->text('b1First');
            $table->text('b1FirstHours');
            $table->text('b1Second');
            $table->text('b1SecondHours');
            $table->text('b1Third');
            $table->text('b1ThirdHours');
            $table->text('b1Four')->nullable();
            $table->text('b1FourHours')->nullable();
            $table->text('a2First');
            $table->text('a2FirstHours');
            $table->text('a2Second');
            $table->text('a2SecondHours');
            $table->text('a2Third');
            $table->text('a2ThirdHours');
            $table->text('a2Four')->nullable();
            $table->text('a2FourHours')->nullable();
            $table->text('b2First');
            $table->text('b2FirstHours');
            $table->text('b2Second');
            $table->text('b2SecondHours');
            $table->text('b2Third');
            $table->text('b2ThirdHours');
            $table->text('b2Four')->nullable();
            $table->text('b2FourHours')->nullable();
            $table->text('a3First');
            $table->text('a3FirstHours');
            $table->text('a3Second');
            $table->text('a3SecondHours');
            $table->text('a3Third');
            $table->text('a3ThirdHours');
            $table->text('a3Four')->nullable();
            $table->text('a3FourHours')->nullable();
            $table->text('b3First');
            $table->text('b3FirstHours');
            $table->text('b3Second');
            $table->text('b3SecondHours');
            $table->text('b3Third');
            $table->text('b3ThirdHours');
            $table->text('b3Four')->nullable();
            $table->text('b3FourHours')->nullable();
            $table->text('a4First');
            $table->text('a4FirstHours');
            $table->text('a4Second');
            $table->text('a4SecondHours');
            $table->text('a4Third');
            $table->text('a4ThirdHours');
            $table->text('a4Four')->nullable();
            $table->text('a4FourHours')->nullable();
            $table->text('b4First');
            $table->text('b4FirstHours');
            $table->text('b4Second');
            $table->text('b4SecondHours');
            $table->text('b4Third');
            $table->text('b4ThirdHours');
            $table->text('b4Four')->nullable();
            $table->text('b4FourHours')->nullable();
            $table->text('totalFirst');
            $table->text('totalsecondHours');
            $table->text('courseDescription')->nullable();
            $table->text('courseSubDescription')->nullable();
            $table->text('courseFirst')->nullable();
            $table->text('courseSecond')->nullable();
            $table->text('courseThird')->nullable();
            $table->text('courseBedroom')->nullable();
            $table->text('courseFifth')->nullable();
            $table->text('courseSixth')->nullable();
            $table->text('courseSeventh')->nullable();
            $table->text('courseEighth')->nullable();
            $table->text('courseNinth')->nullable();
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
        Schema::dropIfExists('tecnologias');
    }
}
