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
        Schema::create('corp_activities', function (Blueprint $table) {
            $table->bigIncrements('crac_id');
            $table->unsignedBigInteger('crac_corp_id');
            $table->string('crac_activity_name');
            $table->string('crac_activity_description');
            $table->timestamps();

            $table->foreign('crac_corp_id')->references('crp_id')->on('corps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corp_activities');
    }
};
