<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookAndBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_and_bill', function (Blueprint $table) {
            $table->id();
            $table->integer('topic_id');
            $table->string('booking_id');
            $table->string('bill_type');
            $table->string('u_price')->nullable();
            $table->string('d_price')->nullable();
            $table->string('p_price')->nullable();
            $table->string('l_price')->nullable();           
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
        Schema::dropIfExists('book_and_bill');
    }
}
