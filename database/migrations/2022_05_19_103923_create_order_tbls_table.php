<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_tbls', function (Blueprint $table) {
            $table->id();
            $table->integer('prod_id');
            $table->integer('order_no');	
            $table->integer('buyer_id');	
            $table->integer('seller_id');	
            $table->integer('order_quantity');	
            $table->text('order_status');	
            $table->text('payment_method');	
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
        Schema::dropIfExists('order_tbls');
    }
}
