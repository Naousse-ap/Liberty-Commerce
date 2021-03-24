<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogTable extends Migration
{
   
    public function up()
    {
        Schema::create('catalog', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255)->unique()->nullable();
            $table->string("photo", 255)->nullable();
            $table->decimal('price', 6, 2);
            $table->timestamps();;

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('product');

        });
    }

    public function down()
    {
        Schema::dropIfExists('catalog');
    }
}
