<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToolSatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_tool_satus', function (Blueprint $table) {
            $table->id();
            $table->varchar('condition_checkout');
            $table->varchar('condition_checkin');
            $table->foreignId('user_id');
            $table->foreignId('tool_id');
            $table->timestamp('checkout_date');
            $table->timestamp('checkin_date');
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
        Schema::dropIfExists('_tool_satus');
    }
}
