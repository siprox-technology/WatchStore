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
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->string('brand',50);
            $table->string('model_number',50);
            $table->string('name',100);
            $table->string('category',40);
            $table->string('type',40);
            $table->string('gender',10);
            $table->string('price',10);
            $table->string('discount',3);
            $table->string('color',15);
            $table->longText('description');
            $table->longText('specification');
            $table->integer('stock');
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
