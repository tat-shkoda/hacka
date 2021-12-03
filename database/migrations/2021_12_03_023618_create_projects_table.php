<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');

            $table->bigInteger('stages_of_ready_id')->unsigned();
            $table->foreign('stages_of_ready_id')->references('id')
                ->on('stages_of_ready')->onDelete('cascade');

            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')
                ->on('categories')->onDelete('cascade');
            $table->bigInteger('subcategory_id')->unsigned();
            $table->foreign('subcategory_id')->references('id')
                ->on('subcategories')->onDelete('cascade');

            $table->text('short_description')->nullable();
            $table->text('benefit')->nullable();
            $table->text('company_id')->nullable();
            $table->enum('certification_type', [
                'да, требуется сертификация и у нас она есть',
                'да, требуется сертификация, но  у нас ее нет',
                'нет, не требуется',
            ]);

            $table->string('firstname');
            $table->string('lastname');
            $table->string('surname')->nullable();
            $table->string('phone_number')->nullable();;
            $table->string('email')->nullable();;
            $table->string('telegram_id')->nullable();;
            $table->text('other_data')->nullable();;

            $table->string('email_company')->nullable();;
            $table->string('company_name')->nullable();;
            $table->string('inn')->nullable();;

            $table->text('url')->nullable();;
            $table->text('original_source')->nullable();
            $table->text('presentation_link')->nullable();
            $table->text('logo')->nullable();
            $table->json('images')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
