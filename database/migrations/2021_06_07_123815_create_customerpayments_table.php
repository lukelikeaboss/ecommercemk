<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerpaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerpayments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type');//mpesa, paypal
            $table->string('details')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->integer('customer_id_id')->unsigned();
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
        Schema::dropIfExists('customerpayments');
    }
}
