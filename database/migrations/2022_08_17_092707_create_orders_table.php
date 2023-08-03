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
            $table->string('sender_name');
            $table->string('sender_street');
            $table->string('sender_province');
            $table->string('sender_city');
            $table->string('sender_postcode');
            $table->string('sender_phone_no');
            $table->string('reciver_name');
            $table->string('reciver_street');
            $table->string('reciver_province');
            $table->string('reciver_city');
            $table->string('reciver_postcode');
            $table->string('reciver_phone_no');
            $table->string('status');
            $table->string('content');
            $table->string('height');
            $table->string('width');
            $table->string('length');
            $table->string('total_value')->nullable();
            $table->boolean('wants_contact_before_delivery')->nullable();
            $table->date('pickup_date')->nullable();
            $table->boolean('wants_estimation')->nullable();
            $table->integer('shop_id');
            $table->integer('user_id');
            $table->integer('ship_id');
            $table->integer('rating_star')->nullable();
            $table->string('rating_review')->nullable();
            
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
