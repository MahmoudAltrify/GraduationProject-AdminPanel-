<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('order_status_id')->unsigned();
            $table->double('tax', 5, 2)->nullable()->default(0);
            $table->double('delivery_fee', 5, 2)->nullable()->default(0);
            $table->text('hint')->nullable()->default('');
            $table->boolean('active')->default(1); // added
            $table->integer('driver_id')->nullable()->unsigned();
            $table->integer('delivery_address_id')->nullable()->unsigned();
            $table->integer('payment_id')->nullable()->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_status_id')->references('id')->on('order_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('driver_id')->references('id')->on('users')->onDelete('set null')->onUpdate('set null');
            $table->foreign('delivery_address_id')->references('id')->on('delivery_addresses')->onDelete('set null')->onUpdate('set null');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
