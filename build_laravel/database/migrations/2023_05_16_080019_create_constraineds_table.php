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
        Schema::create('constraineds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('motherboard')->constrained('motherboards');
            $table->foreignId('processor')->constrained('processors');
            $table->foreignId('gpu')->constrained('g_p_u_s');
            $table->foreignId('ram')->constrained('r_a_m_s');
            $table->foreignId('power')->constrained('powers');
            $table->foreignId('cooling')->constrained('coolings');
            $table->foreignId('storage')->constrained('storages');
            $table->foreignId('user_id')->constrained('users');


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
        Schema::dropIfExists('constraineds');
    }
};
