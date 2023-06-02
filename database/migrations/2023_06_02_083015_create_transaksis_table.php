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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->nullable()->index('fk_transaksi_to_user');
            $table->foreign('id_user', 'fk_transaksi_to_user')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreignId('id_properti')->nullable()->index('fk_transaksi_to_propertis');
            $table->foreign('id_properti', 'fk_transaksi_to_propertis')->references('id')->on('propertis')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->text('deskripsi');
            $table->string('durasi');
            $table->bigInteger('harga');
            $table->dateTime('batas_waktu_pembayaran');
            $table->dateTime('waktu_pembayaran')->nullable();
            $table->foreignId('id_metode')->index('fk_transaksi_to_metode_pembayaran');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->dropForeign('fk_transaksi_to_user');
            $table->dropForeign('fk_transaksi_to_propertis');
        });
        Schema::dropIfExists('transaksis');
    }
};
