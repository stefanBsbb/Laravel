<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')
                ->references('id')->on('Orders');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')
                ->references('id')->on('Products');
            $table->decimal('Price');
            $table->Integer('Quantity');
            $table->decimal('TotalPrice');
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
             Schema::table('order_details', function (Blueprint $table) {
            $table->dropForeign('OrderDetails_order_id_foreign');
            $table->dropColumn('order_id');
            $table->dropForeign('OrderDetails_product_id_foreign');
            $table->dropColumn('product_id');
             });
    }
}
