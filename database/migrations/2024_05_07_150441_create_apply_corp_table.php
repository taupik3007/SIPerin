<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('apply_corps', function (Blueprint $table) {
            $table->bigIncrements('apcr_id');
            $table->unsignedBigInteger('apcr_corp_id');
            $table->unsignedBigInteger('apcr_user_id');
            $table->string('apcr_status');
            $table->timestamps();

            $table->foreign('apcr_corp_id')->references('crp_id')->on('corps')->onDelete('cascade');
            $table->foreign('apcr_user_id')->references('usr_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_corps');
    }
};
