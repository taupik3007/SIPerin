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
        Schema::create('corp_activity', function (Blueprint $table) {
            $table->bigIncrements('crac_id');
            $table->unsignedBigInteger('crac_corp_id');
            $table->string('crac_activity_name');
            $table->string('crac_activity_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corp_activity');
    }
};
