<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_uses', function (Blueprint $table) {
            $table->id();
            $table->string('about_us_title')->nullable();
            $table->string('company_est')->nullable();
            $table->text('company_history')->nullable();
            $table->string('country_support')->nullable();
            $table->string('customers')->nullable();
            $table->string('workforce')->nullable();
            $table->string('customer_support')->nullable();
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
        Schema::dropIfExists('about_uses');
    }
}
