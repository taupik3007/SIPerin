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
        Schema::create('corp_qualifications', function (Blueprint $table) {
            $table->bigIncrements('crqa_id');
            $table->unsignedBigInteger('crqa_corp_id');
            $table->string('crqa_name');
            $table->string('crqa_description');
            $table->timestamps();
            $table->foreign('crqa_corp_id')->references('crp_id')->on('corps')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corp_qualifications');
    }
};
