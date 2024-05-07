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
        Schema::create('apply_corp', function (Blueprint $table) {
            $table->bigIncrements('apcr_id');
            $table->unsignedBigInteger('apcr_corp_id');
            $table->unsignedBigInteger('apcr_user_id');
            $table->string('apcr_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_corp');
    }
};
