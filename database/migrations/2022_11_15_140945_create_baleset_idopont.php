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
        Schema::create('baleset_idopont', function (Blueprint $table) {
            $table->id(b_id);
            $table->dateTime("Baleset_idopontja");
            $table->string("Serules_leirasa",1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baleset_idopont');
    }
};
