<?php

namespace App\Livewire\Pages\Pendaftaran;

use Exception;
use Livewire\Component;
use App\Models\Pendaftaran;

class FormSekolah extends Component
{
    public $alamat_sekolah;
    public $asal_sekolah;
    public $jurusan;
    public $tahun_lulus;
    public $nilai_raport;
    public $nilai_un;

    public function rules()
    {
        return [
            'alamat_sekolah' => 'required',
            'asal_sekolah' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required|numeric|min:2010|max:2021|digits:4',
            'nilai_raport' => 'required',
            'nilai_un' => 'required',
        ];
    }

    public function save()
    {
        $this->validate();

        try {
            $data = [
                'alamat_sekolah' => $this->alamat_sekolah,
                'asal_sekolah' => $this->asal_sekolah,
                'jurusan' => $this->jurusan,
                'tahun_lulus' => $this->tahun_lulus,
                'nilai_raport' => $this->nilai_raport,
                'nilai_un' => $this->nilai_un,
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
        return view('livewire.pages.pendaftaran.form-sekolah');
    }
}
