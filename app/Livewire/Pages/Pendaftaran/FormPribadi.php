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

    public $id;
    public $editMode = false;

    public function rules()
    {
        return [
            'nisn' => 'required|string|unique:pendaftarans,nisn,' . ($this->editMode ? $this->id : 'NULL'),
            'nik' => 'required|string|unique:pendaftarans,nik,' . ($this->editMode ? $this->id : 'NULL') . '|min:16|max:16',
            'nama' => 'required',
            'email' => 'required|email|unique:pendaftarans,email,' . ($this->editMode ? $this->id : 'NULL') . '|max:50',
            'phone_number' => 'required|numeric',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ];
    }

    public function mount()
    {
        $cek = Pendaftaran::where('user_id', auth()->user()->id)->where('status', false)->first();
        if ($cek != null) {
            $this->id = $cek->id;
            $this->editMode = true;

            $this->nisn = $cek->nisn;
            $this->nik = $cek->nik;
            $this->nama = $cek->nama;
            $this->email = $cek->email;
            $this->phone_number = $cek->phone_number;
            $this->tanggal_lahir = $cek->tanggal_lahir;
            $this->tempat_lahir = $cek->tempat_lahir;
            $this->jenis_kelamin = $cek->jenis_kelamin;
            $this->alamat = $cek->alamat;
        }
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
