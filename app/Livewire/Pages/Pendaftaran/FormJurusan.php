<?php

namespace App\Livewire\Pages\Pendaftaran;

use Exception;
use Livewire\Component;
use App\Models\Pendaftaran;

class FormJurusan extends Component
{
    public $jurusan_pilihan1;
    public $jurusan_pilihan2;
    public $jurusan_pilihan3;

    public function rules()
    {
        return [
            'jurusan_pilihan1' => 'required',
            'jurusan_pilihan2' => 'required|different:jurusan_pilihan1',
            'jurusan_pilihan3' => 'required|different:jurusan_pilihan1|different:jurusan_pilihan2',
        ];
    }

    public function save()
    {
        $this->validate();

        try {
            $cek = Pendaftaran::where('user_id', auth()->user()->id)->where('status', false)->first();
            if ($cek != null) {
                if ($cek->nik == null || $cek->nama == null || $cek->alamat == null || $cek->tempat_lahir == null || $cek->tanggal_lahir == null || $cek->jenis_kelamin == null) {
                    $this->dispatch('saved', 'error', 'Data diri belum lengkap');
                    return;
                }

                if ($cek->alamat_sekolah == null || $cek->asal_sekolah == null || $cek->jurusan == null || $cek->tahun_lulus == null || $cek->nilai_raport == null || $cek->nilai_un == null) {
                    $this->dispatch('saved', 'error', 'Data sekolah belum lengkap');
                    return;
                }

                if ($cek->nama_ibukandung == null || $cek->nama_ayahkandung == null || $cek->pekerjaan_ibukandung == null || $cek->pekerjaan_ayahkandung == null) {
                    $this->dispatch('saved', 'error', 'Data orang tua belum lengkap');
                    return;
                }
            } else {
                $this->dispatch('saved', 'error', 'Data diri belum lengkap');
                return;
            }

            $data = [
                'jurusan_pilihan1' => $this->jurusan_pilihan1,
                'jurusan_pilihan2' => $this->jurusan_pilihan2,
                'jurusan_pilihan3' => $this->jurusan_pilihan3,
                'status' => true,
            ];

            Pendaftaran::updateOrCreate([
                'user_id' => auth()->user()->id,
                'status' => false,
            ], $data);

            $this->dispatch('saved', 'success', 'Data berhasil disimpan');
        } catch (Exception $e) {
            $this->dispatch('saved', 'error', 'Data gagal disimpan, Error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.pages.pendaftaran.form-jurusan');
    }
}
