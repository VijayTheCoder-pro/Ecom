<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('image');
            $table->string('Pname', 100)->nullable();
            $table->string('Pdescription', 200)->nullable();
            $table->string('category')->nullable();
            $table->string('brand',20)->nullable();
            $table->integer('price')->nullable();
            $table->integer('oprice')->nullable();
            $table->integer('stock')->nullable();
            $table->string('status',20)->nullable();
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
};
