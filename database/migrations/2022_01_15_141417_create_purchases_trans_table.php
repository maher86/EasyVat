<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_trans', function (Blueprint $table) {
            $table->increments('trans_no');            
            $table->string('reference')->unique;
            $table->enum('type', array('6', '7'));//purchase = 4 creditNote = 5
            $table->unsignedBigInteger('supplier_id');
            $table->double('amount');
            $table->double('vat_amount');                        
            $table->timestamps();

            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases_trans');
    }
}
