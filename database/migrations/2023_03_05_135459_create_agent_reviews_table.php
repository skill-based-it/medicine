<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_reviews', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('location')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('agent_reviews');
    }
}
