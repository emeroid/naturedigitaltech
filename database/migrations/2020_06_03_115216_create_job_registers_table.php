<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('mobile');
            $table->string('email');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('All_state');
            $table->integer('jobskill_id')->unsigned();
            $table->foreign('jobskill_id')->references('id')->on('jobskill');
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
        Schema::dropIfExists('job_registers');
    }
}
