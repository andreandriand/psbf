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
        Schema::create('photoproperties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_properti')->nullable()->index('fk_photoproperties_to_properti');
            $table->foreign('id_properti', 'fk_photoproperties_to_properti')->references('id')->on('propertis')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('photoproperties', function (Blueprint $table) {
            $table->dropForeign('fk_photoproperties_to_properti');
        });
        Schema::dropIfExists('photoproperties');
    }
};
