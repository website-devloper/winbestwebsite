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
        Schema::create('c_i_m_r_s', function (Blueprint $table) {
            $table->id();
             $table->String('login');
             $table->String('password');
             $table->integer('N_Adherant');
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
        Schema::dropIfExists('c_i_m_r_s');
    }
};
