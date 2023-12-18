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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('nama_lengkap', 100);
            $table->string('foto_ktp')->nullable();
            $table->text('alamat_ktp');
            $table->text('alamat_tinggal');
            $table->string('kecamatan', 50);
            $table->foreignId('kabupaten_id');
            $table->foreignId('provinsi_id');
            $table->string('no_telepon', 20);
            $table->string('no_hp', 20);
            $table->string('email', 100);
            $table->string('kewarganegaraan', 20);
            $table->string('negara_wna')->nullable();
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 100);
            $table->foreignId('kabupaten_lahir_id');
            $table->foreignId('provinsi_lahir_id');
            $table->string('negara_lahir', 30)->nullable();
            $table->string('jenis_kelamin', 1);
            $table->string('status_menikah', 20)->nullable();
            $table->string('agama', 20)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
