<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255)->unique()->nullable();
            $table->text('description')->nullable();
            $table->string("photo", 255)->nullable();
            $table->string("category", 255);
            $table->integer("stock");
            $table->string("reference", 255)->unique();
            $table->decimal('price', 6, 2);
            $table->timestamps();
        });
    }

     
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
