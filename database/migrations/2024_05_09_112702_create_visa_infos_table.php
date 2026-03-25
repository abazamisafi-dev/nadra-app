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
        Schema::create('visa_infos', function (Blueprint $table) {
            $table->id();
            $table->string('gen_id');
            $table->string('name');
            $table->date('applyDate');
            $table->string('refrence_no');
            $table->date('DOB');
            $table->string('passport_no');
            $table->string('visaCategory');
            $table->string('visaSubCategory');
            $table->string('applicationType');
            $table->date('visaGrantDate');
            $table->string('travelDocumentCountry');
            $table->string('stayFicility');
            $table->date('visaStartDate');
            $table->date('visaEndDate');
            $table->string('visaDuration');
            $table->string('photo_path');
            $table->string('biography');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_infos');
    }
};
