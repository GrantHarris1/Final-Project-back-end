<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToolStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tool_status', function (Blueprint $table) {
            $table->id();
            $table->string('condition_checkout')->nullable();
            $table->string('condition_checkin')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('tool_id');
            $table->dateTime('checkout_date')->nullable();
            $table->dateTime('checkin_date')->nullable();
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
        Schema::dropIfExists('tool_status');
    }
}
