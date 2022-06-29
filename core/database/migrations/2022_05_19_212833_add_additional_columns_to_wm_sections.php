<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalColumnsToWmSections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('webmaster_sections', function (Blueprint $table) {
            $table->tinyInteger('billing_status')->default(0);
            $table->tinyInteger('description_status')->default(0);
            $table->tinyInteger('additional_fee_status')->default(0);
            $table->tinyInteger('activity_status')->default(0);
            $table->tinyInteger('location_status')->default(0);
            $table->tinyInteger('capacity_status')->default(0);
            $table->tinyInteger('ammenities_status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('webmaster_sections', function (Blueprint $table) {
            $table->dropColumn('billing_status');
            $table->dropColumn('description_status');
            $table->dropColumn('additional_fee_status');
            $table->dropColumn('activity_status');
            $table->dropColumn('location_status');
            $table->dropColumn('capacity_status');
            $table->dropColumn('ammenities_status');
        });
    }
}
