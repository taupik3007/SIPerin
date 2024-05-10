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
        Schema::create('corp_majors', function (Blueprint $table) {
            $table->bigIncrements('crmj_id');
            $table->unsignedBigInteger('crmj_corp_id');
            $table->unsignedBigInteger('crmj_major_id');
            $table->timestamps();

            $table->foreign('crmj_corp_id')->references('crp_id')->on('corps')->onDelete('cascade');
            $table->foreign('crmj_major_id')->references('mjr_id')->on('majors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corp_majors');
    }
};
