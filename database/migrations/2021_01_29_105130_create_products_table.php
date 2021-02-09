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
            $table->string('sub_brand',50);
            $table->string('model_number',50);
            $table->string('name',100);
            $table->string('category',40);
            $table->string('feature',40);
            $table->string('gender',10);
            $table->double('price', 8, 2);
            $table->integer('discount');
            $table->string('color',15);
            $table->longText('description');
            $table->longText('specification');
            $table->integer('stock');
            $table->integer('sale_number')->default('0');
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
