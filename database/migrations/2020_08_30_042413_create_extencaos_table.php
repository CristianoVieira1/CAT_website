<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtencaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extencaos', function (Blueprint $table) {
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
            $table->text('totalFirst');
            $table->text('totalsecondHours');
            $table->text('detailsCourse');
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
        Schema::dropIfExists('extencaos');
    }
}
