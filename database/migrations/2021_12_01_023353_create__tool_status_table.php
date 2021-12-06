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
        Schema::create('tool_satus', function (Blueprint $table) {
            $table->id();
            $table->string('condition_checkout');
            $table->string('condition_checkin');
            $table->foreignId('user_id');
            $table->foreignId('tool_id');
            $table->dateTime('checkout_date');
            $table->dateTime('checkin_date');
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
        Schema::dropIfExists('tool_satus');
    }
}
