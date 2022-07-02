<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddtionalFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_fees', function (Blueprint $table) {
            $table->id();
            $table->integer('topic_id');
            $table->string('fee_type');
            $table->string('fee_name');
            $table->string('fee_text')->nullable();
            $table->string('fee_value')->nullable();
           
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
        Schema::dropIfExists('addtional_fees');
    }
}
