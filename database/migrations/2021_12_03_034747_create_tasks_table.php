<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('what_hurts')->nullable();
            $table->string('symptoms')->nullable();
            $table->string('consequences')->nullable();
            $table->string('reason')->nullable();
            $table->string('objects')->nullable();
            $table->string('deadlines')->nullable();
            $table->string('what_attempted')->nullable();
            $table->string('contacts')->nullable();
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
