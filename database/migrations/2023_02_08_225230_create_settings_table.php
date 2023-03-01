<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();

            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('in')->nullable();
            $table->string('li')->nullable();
            $table->string('te')->nullable();
            $table->string('yo')->nullable();


            $table->longtext('meta_title')->nullable();
            $table->longtext('meta_tag')->nullable();
            $table->longtext('meta_description')->nullable();
            $table->longtext('comment_plugin')->nullable();

            $table->longtext('copyright_text')->nullable();
            $table->longtext('developer_text')->nullable();
            $table->longtext('maintenance_text')->nullable();
            $table->string('maintenance_status')->nullable();
            $table->longtext('about_us')->nullable();

            

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
        Schema::dropIfExists('settings');
    }
}
