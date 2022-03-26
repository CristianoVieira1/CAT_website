<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educacaos', function (Blueprint $table) {
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
            $table->text('a1Fifth')->nullable();
            $table->text('a1FifthHours')->nullable();
            $table->text('a1Sixth')->nullable();
            $table->text('a1SixthHours')->nullable();
            $table->text('a1Seventh')->nullable();
            $table->text('a1SeventhHours')->nullable();
            $table->text('totalFirst');
            $table->text('totalsecondHours');
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
        Schema::dropIfExists('educacaos');
    }
}
