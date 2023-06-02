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
        Schema::create('propertis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('id_user')->nullable()->index('fk_properti_to_user');
            $table->foreign('id_user', 'fk_properti_to_user')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->text('deskripsi');
            $table->string('alamat');
            $table->string('kategori');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('propertis', function (Blueprint $table) {
            $table->dropForeign('fk_properti_to_user');
        });
        Schema::dropIfExists('propertis');
    }
};
