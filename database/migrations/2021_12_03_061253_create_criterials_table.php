<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criterials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_status_id')->unsigned();
            $table->foreign('project_status_id')->references('id')
                ->on('project_statuses')->onDelete('cascade');
            $table->string('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criterials');
    }
}
