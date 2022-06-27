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
        Schema::create('bars', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address");
            $table->string("city");
            $table->string("zip_code");
            $table->string("phone");
            $table->string("email");
            $table->string("website")->nullable();
            $table->string("logo")->nullable();
            $table->string("cover_picture")->nullable();
            $table->bigInteger("siret");
            $table->string("opening_time")->nullable();
            $table->string("opening_days")->nullable();
            $table->text("description")->nullable();
            $table->foreignId("owner_id");
            $table->foreign("owner_id")->references("id")->on("users");
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
        Schema::dropIfExists('bars');
    }
};
