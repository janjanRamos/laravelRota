<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliverybackupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverybackups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('institution');
            $table->string('name');
            $table->string('activity');
            $table->string('description');
            $table->string('priority');
            $table->string('deadline');
            $table->string('status');
            $table->string('statusdescription');
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
        Schema::drop('deliverybackups');
    }
}
