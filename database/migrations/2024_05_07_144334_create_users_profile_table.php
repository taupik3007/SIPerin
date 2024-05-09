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
        Schema::create('users_profiles', function (Blueprint $table) {
            $table->bigIncrements('uspf_id');
            $table->unsignedBigInteger('uspf_user_id');
            $table->string('uspf_name');
            $table->string('uspf_gender');
            $table->string('uspf_birth_place');
            $table->timestamp('uspf_date_of_birth');
            $table->string('uspf_religion');
            $table->biginteger('uspf_nis');
            $table->string('uspf_CV');
            $table->timestamps();

            $table->foreign('uspf_user_id')->references('usr_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_profiles');
    }
};
