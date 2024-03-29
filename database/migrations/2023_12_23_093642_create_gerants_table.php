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
        Schema::create('gerants', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('email')->unique();
            $table->string('cin');
            $table->string('role', 255);
            $table->unsignedBigInteger('societe_id'); 
            $table->foreign('societe_id')->references('id')->on('societes');
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
        Schema::dropIfExists('gerants');
    }
};
