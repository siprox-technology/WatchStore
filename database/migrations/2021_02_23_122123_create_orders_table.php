<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status',20)->default('pending');
            $table->double('delivery_price',4,2);
            $table->string('delivery_address',150);
            $table->string('delivery_city',50);
            $table->string('delivery_state',30);
            $table->string('delivery_country',30);
            $table->string('delivery_postal_code',15);
            $table->double('total_price',12,2);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
