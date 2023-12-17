<?php

namespace App\Livewire\Pages\Pendaftaran;

use App\Models\Pendaftaran;
use Exception;
use Livewire\Component;

class FormPribadi extends Component
{
    public $nisn;
    public $nik;
    public $nama;
    public $email;
    public $phone_number;
    public $tanggal_lahir;
    public $tempat_lahir;
    public $jenis_kelamin;
    public $alamat;

    public function rules()
    {
        return [
            'nisn' => 'required|numeric|unique:pendaftarans,nisn',
            'nik' => 'required|numeric|unique:pendaftarans,nik',
            'nama' => 'required',
            'email' => 'required|email|unique:pendaftarans,email',
            'phone_number' => 'required|numeric',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ];
    }

    public function save()
    {
        $this->validate();
        try {
            $data = [
                'user_id' => auth()->user()->id,
                'nisn' => $this->nisn,
                'nik' => $this->nik,
                'nama' => $this->nama,
                'email' => $this->email,
                'phone_number' => $this->phone_number,
                'tanggal_lahir' => $this->tanggal_lahir,
                'tempat_lahir' => $this->tempat_lahir,
                'jenis_kelamin' => $this->jenis_kelamin,
                'alamat' => $this->alamat,
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
        return view('livewire.pages.pendaftaran.form-pribadi');
    }
}
