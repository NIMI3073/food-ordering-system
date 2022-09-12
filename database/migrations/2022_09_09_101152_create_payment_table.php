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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('card_num');
            $table->integer('card_cvc');
            $table->string('card_expiry_month');
            $table->string('card_expiry_year');
            $table->string('item_name');
            $table->string('item_price');
            $table->string('item_price_currency');
            $table->string('paid_amount') ;
            $table->string('paid_amount_currency') ;
            $table->string('payment_status');
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
        Schema::dropIfExists('payment');
    }
};
