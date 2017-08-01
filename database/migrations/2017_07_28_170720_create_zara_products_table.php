<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZaraProductsTable extends Migration
{
    public function up()
    {
        Schema::create('zara_products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imagePath');
            $table->string('title');
            $table->float('price');
        });
    }

    public function down()
    {
        Schema::dropIfExists('zara_products');
    }
}
