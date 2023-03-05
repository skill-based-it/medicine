<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_informations', function (Blueprint $table) {
            $table->id();
            $table->integer('index_no');
            $table->string('title')->nullable();
            $table->text('button_link')->nullable();
            $table->string('button_name')->nullable();
            $table->string('image')->nullable();
            $table->text('vedio_link')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('slider_informations');
    }
}
