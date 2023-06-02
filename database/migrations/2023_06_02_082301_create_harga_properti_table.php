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
        Schema::create('harga_properti', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_properti')->nullable()->index('fk_harga_properti_to_propertis');
            $table->foreign('id_properti', 'fk_harga_properti_to_propertis')->references('id')->on('propertis')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->bigInteger('harga');
            $table->string('durasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('harga_properti', function (Blueprint $table) {
            $table->dropForeign('fk_harga_properti_to_propertis');
        });
        Schema::dropIfExists('harga_properti');
    }
};
