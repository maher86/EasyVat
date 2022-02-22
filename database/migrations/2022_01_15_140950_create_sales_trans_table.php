<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_trans', function (Blueprint $table) {
            $table->increments('trans_no')->unique;            
            $table->string('reference')->unique;
            $table->enum('type', array('4', '5'));//sales = 4 creditNote = 5
            $table->unsignedBigInteger('customer_id');
            $table->double('amount');
            $table->double('vat_amount');
            $table->double('freight');
            $table->enum('salesType',array('1','2'));
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_trans');
    }
}
