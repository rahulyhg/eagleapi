<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->integer('rating');
            $table->boolean('status');
            $table->boolean('approved');
            $table->boolean('goal_id')->references('id')->on('ind_goals');
            $table->boolean('ipm_id')->references('id')->on('ipms');
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
        Schema::dropIfExists('tasks');
    }
}
