<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('stocks', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('symbol');
            $table->string('share_name');
            $table->integer('shares');
            $table->float('purchase_price');
            $table->date('purchased');
            $table->integer('customer_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('stocks', function (Blueprint $table) {
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
        Schema::drop('stocks');
    }
}
