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
            $table->string('nisn');
            $table->string('nama');
            $table->text('alamat');
            $table->string('nik');
            $table->string('phone_number');
            $table->string('email');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);

            $table->string('nama_ibukandung')->nullable();
            $table->string('pekerjaan_ibukandung')->nullable();
            $table->string('nama_ayahkandung')->nullable();
            $table->string('pekerjaan_ayahkandung')->nullable();

            $table->text('alamat_sekolah')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('tahun_lulus')->nullable();
            $table->decimal('nilai_raport', 8, 2)->nullable();
            $table->decimal('nilai_un', 8, 2)->nullable();

            $table->string('jurusan_pilihan1')->nullable();
            $table->string('jurusan_pilihan2')->nullable();
            $table->string('jurusan_pilihan3')->nullable();

            $table->boolean('status')->default(false);
            $table->string('status_pendaftaran')->nullable();
            $table->string('jurusan_diterima')->nullable();

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
