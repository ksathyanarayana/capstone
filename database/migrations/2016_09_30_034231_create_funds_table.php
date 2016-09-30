<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('investments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->string('category');
            $table->string('description');
            $table->float('acquired_value');
            $table->date('acquired_date');
            $table->float('recent_value');
            $table->date('recent_date');
            $table->timestamps();
        });

        Schema::table('investments', function (Blueprint $table) {
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
        Schema::drop('investments');
    }
}
