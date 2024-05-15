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
        Schema::create('corp_profiles', function (Blueprint $table) {
            $table->bigIncrements('crpp_id');
            $table->string('crpp_visi')->nullable();
            $table->string('crpp_misi')->nullable();
            $table->string('crpp_description')->nullable();
            $table->unsignedBigInteger('crpp_corp_id');
            $table->string('crpp_method')->nullable();
            $table->string('crpp_work_system')->nullable();
            $table->string('crpp_address')->nullable();
            $table->timestamps();

            $table->foreign('crpp_corp_id')->references('crp_id')->on('corps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corp_profiles');
    }
};
