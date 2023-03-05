<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishOpeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publish_openings', function (Blueprint $table) {
            $table->id();
            $table->integer('location_id')->nullable();
            $table->integer('jobs_id')->nullable();
            $table->string('opening_title')->nullable();
            $table->text('opening_description')->nullable();
            $table->string('opening_amount')->nullable();
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
        Schema::dropIfExists('publish_openings');
    }
}
