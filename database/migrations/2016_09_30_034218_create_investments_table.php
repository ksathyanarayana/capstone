<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funds', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->string('fund_name');
            $table->string('fund_description');
            $table->float('acquired_value');
            $table->date('acquired_date');
            $table->float('recent_value');
            $table->date('recent_date');
            $table->timestamps();
        });

        Schema::table('funds', function (Blueprint $table) {
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
        Schema::drop('funds');
    }
}
