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
            $table->increments('id');
            $table->string("name");
            $table->text("description");
            $table->float("price");
            $table->integer("stock");
            $table->string("processor");
            $table->string("graphic");
            $table->string("RAM");
            $table->string("motherboard");
            $table->string("imageUrl");
            $table->string("imageUrl2");
            $table->string("imageUrl3");
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
