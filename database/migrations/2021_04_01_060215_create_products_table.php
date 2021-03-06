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
            $table->string('title');
            $table->string('description')->nullable();
            $table->float('amount')->nullable();
            $table->string('category')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->nullable();
            $table->string('type')->nullable();
            $table->unsignedInteger('small_size')->nullable();
            $table->unsignedInteger('medium_size')->nullable();
            $table->unsignedInteger('large_size')->nullable();
            $table->unsignedInteger('extra_large_size')->nullable();
            $table->unsignedInteger('admin_id')->nullable();
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
