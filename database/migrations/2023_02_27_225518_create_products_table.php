<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->bigInteger('subcat_id')->unsigned();
            $table->foreign('subcat_id')->references('id')->on('subcategories');
            $table->string('product_code')->nullable();
            $table->longtext('product_name')->nullable();
            $table->longtext('short_details')->nullable();
            $table->longtext('overview')->nullable();
            $table->longtext('features')->nullable();
            $table->longtext('technology')->nullable();
            $table->longtext('assay')->nullable();
            $table->longtext('image')->nullable();
            $table->longtext('faq')->nullable();
            $table->string('date')->nullable();
            $table->longtext('seo_title')->nullable();
            $table->longtext('seo_description')->nullable();
            $table->longtext('seo_tag')->nullable();

            
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
        Schema::dropIfExists('products');
    }
}
