<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->longText("Photo")->nullable();
            $table->string('Produit')->unique();
            $table->integer('Quantite');
            $table->decimal('Prix', 6, 2);
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
