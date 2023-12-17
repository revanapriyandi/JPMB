<?php

namespace App\Livewire\Pages\Pendaftaran;

use Exception;
use Livewire\Component;
use App\Models\Pendaftaran;

class FormOrangTua extends Component
{
    public $nama_ibukandung;
    public $nama_ayahkandung;
    public $pekerjaan_ibukandung;
    public $pekerjaan_ayahkandung;


    public function rules()
    {
        return [
            'nama_ibukandung' => 'required',
            'nama_ayahkandung' => 'required',
            'pekerjaan_ibukandung' => 'required',
            'pekerjaan_ayahkandung' => 'required',
        ];
    }

    public function mount()
    {
        $cek = Pendaftaran::where('user_id', auth()->user()->id)->where('status', false)->first();
        if ($cek != null) {
            $this->nama_ibukandung = $cek->nama_ibukandung;
            $this->nama_ayahkandung = $cek->nama_ayahkandung;
            $this->pekerjaan_ibukandung = $cek->pekerjaan_ibukandung;
            $this->pekerjaan_ayahkandung = $cek->pekerjaan_ayahkandung;
        }
    }

    public function save()
    {
        $this->validate();

        try {
            $data = [
                'nama_ibukandung' => $this->nama_ibukandung,
                'nama_ayahkandung' => $this->nama_ayahkandung,
                'pekerjaan_ibukandung' => $this->pekerjaan_ibukandung,
                'pekerjaan_ayahkandung' => $this->pekerjaan_ayahkandung,
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
        return view('livewire.pages.pendaftaran.form-orang-tua');
    }
}
