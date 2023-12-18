<?php

namespace App\Livewire\Pages\Pendaftaran;

use Exception;
use Livewire\Component;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Pendaftaran;

class FormPribadi extends Component
{
    public $nama_lengkap;
    public $alamat_ktp;
    public $alamat_tinggal;
    public $kecamatan;
    public $kabupaten_id;
    public $provinsi_id;
    public $no_telepon;
    public $no_hp;
    public $email;
    public $kewarganegaraan;
    public $negara_wna;
    public $tanggal_lahir;
    public $tempat_lahir;
    public $kabupaten_lahir_id;
    public $provinsi_lahir_id;
    public $negara_lahir;
    public $jenis_kelamin;
    public $status_menikah;
    public $agama;

    public $kabupatens;
    public $provinsis;

    public function mount()
    {
        $this->kabupatens = Kabupaten::all();
        $this->provinsis = Provinsi::all();
    }

    public function save()
    {
        $this->validate([
            'nama_lengkap' => ['required', 'string', 'max:100'],
            'alamat_ktp' => 'required',
            'alamat_tinggal' => 'required',
            'kecamatan' => ['required', 'string', 'max:50'],
            'kabupaten_id' => ['required', 'exists:kabupatens,id'],
            'provinsi_id' => ['required', 'exists:provinsis,id'],
            'no_telepon' => ['required', 'integer'],
            'no_hp' => ['required', 'integer', 'digits_between:10,15'],
            'email' => ['required', 'email', 'max:100'],
            'kewarganegaraan' => ['required', 'string', 'max:50', 'in:wni_asli,wni_keturunan,wna'],
            'negara_wna' => ['nullable', 'string', 'max:50'],
            'tanggal_lahir' => ['required', 'date'],
            'tempat_lahir' =>  ['required', 'string', 'max:50'],
            'kabupaten_lahir_id' => ['required', 'exists:kabupatens,id'],
            'provinsi_lahir_id' =>  ['required', 'exists:provinsis,id'],
            'negara_lahir' =>  ['nullable', 'string', 'max:50'],
            'jenis_kelamin' =>  ['required', 'string', 'max:50', 'in:L,P'],
            'status_menikah' =>  ['required', 'string', 'max:50', 'in:belum_menikah,menikah,lainnya'],
            'agama' => ['required', 'string', 'max:50', 'in:islam,kristen,katolik,hindu,budha,lainnya'],
        ], [
            'kabupaten_id.required' => 'Kabupaten tidak boleh kosong',
            'provinsi_id.required' => 'Provinsi tidak boleh kosong',
            'kabupaten_lahir_id.required' => 'Kabupaten tidak boleh kosong',
            'provinsi_lahir_id.required' => 'Provinsi tidak boleh kosong',
        ]);
        try {
            $data = [
                'user_id' => auth()->user()->id,
                'nama_lengkap' => $this->nama_lengkap,
                'alamat_ktp' => $this->alamat_ktp,
                'alamat_tinggal' => $this->alamat_tinggal,
                'kecamatan' => $this->kecamatan,
                'kabupaten_id' => $this->kabupaten_id,
                'provinsi_id' => $this->provinsi_id,
                'no_telepon' => $this->no_telepon,
                'no_hp' => $this->no_hp,
                'email' => $this->email,
                'kewarganegaraan' => $this->kewarganegaraan,
                'negara_wna' => $this->negara_wna,
                'tanggal_lahir' => $this->tanggal_lahir,
                'tempat_lahir' => $this->tempat_lahir,
                'kabupaten_lahir_id' => $this->kabupaten_lahir_id,
                'provinsi_lahir_id' => $this->provinsi_lahir_id,
                'negara_lahir' => $this->negara_lahir,
                'jenis_kelamin' => $this->jenis_kelamin,
                'status_menikah' => $this->status_menikah,
                'agama' => $this->agama,
            ];
            Pendaftaran::create($data);

            $this->dispatch('saved', 'success', 'Data berhasil disimpan');

            $this->redirect(route('pendaftaran'), true);
        } catch (Exception $e) {
            $this->dispatch('saved', 'error', 'Data gagal disimpan, Error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.pages.pendaftaran.form-pribadi');
    }
}
