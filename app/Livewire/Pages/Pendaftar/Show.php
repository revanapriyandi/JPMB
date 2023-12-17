<?php

namespace App\Livewire\Pages\Pendaftar;

use Livewire\Component;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Schema;

class Show extends Component
{
    public $id;

    public $pendaftar;
    public $columns;

    public $status_pendaftaran;
    public $jurusan_diterima;


    public function updateStatusPendaftaran()
    {
        $this->validate([
            'status_pendaftaran' =>  ['required', 'string', 'in:PENDING,DITERIMA,DITOLAK']
        ]);

        $this->pendaftar->update([
            'status_pendaftaran' => $this->status_pendaftaran,
            'jurusan_diterima' => $this->jurusan_diterima,
        ]);

        $this->dispatch('saved', 'success', 'Status pendaftaran berhasil diubah');
    }

    public function hapusDataPendaftar()
    {
        $this->pendaftar->delete();

        $this->dispatch('saved', 'success', 'Data pendaftar berhasil dihapus');
    }

    public function mount()
    {
        $this->columns = Schema::getColumnListing('pendaftarans');

        $this->pendaftar = Pendaftaran::find($this->id);
        $this->status_pendaftaran = $this->pendaftar->status_pendaftaran;
        $this->jurusan_diterima = $this->pendaftar->jurusan_diterima;
    }

    public function render()
    {
        return view('livewire.pages.pendaftar.show');
    }
}
