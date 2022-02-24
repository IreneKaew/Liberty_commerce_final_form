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
            $table->string('title');
            $table->string('titlecircuit');
            $table->binary('image');
            $table->binary('imagecircuit');
            $table->decimal('price');
            $table->string('descrip');
            $table->integer('stock');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');



            $table->unsignedBigInteger('catalog_id')->default('1');
            $table->foreign('catalog_id')->references('id')->on('catalogs');
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
