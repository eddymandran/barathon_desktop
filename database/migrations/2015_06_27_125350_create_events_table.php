<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->dateTime("start_date");
            $table->dateTime("end_date");
            $table->text("description")->nullable();
            $table->integer("number_user_min")->nullable();
            $table->integer("number_user_max");
            $table->string("event_picture")->nullable();
            $table->foreignId("bar_id");
            $table->foreign("bar_id")->references("id")->on("bars");
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
        Schema::dropIfExists('events');
    }
};
