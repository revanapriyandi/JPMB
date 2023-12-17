<?php

namespace App\Livewire\Pages\Pendaftar;

use App\Models\Pendaftaran;
use Livewire\Attributes\On;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class Datatable extends DataTableComponent
{
    protected $model = Pendaftaran::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nama", "nama")
                ->sortable()
                ->searchable(),
            Column::make("Email", "email")
                ->sortable()
                ->searchable(),
            Column::make("No. HP", "phone_number")
                ->sortable()
                ->searchable(),
            Column::make("Alamat", "alamat")
                ->sortable()
                ->searchable(),
            Column::make("Tanggal Lahir", "tanggal_lahir")
                ->format(function ($value) {
                    return date('d-m-Y', strtotime($value));
                })
                ->sortable()
                ->searchable(),
            Column::make("Tempat Lahir", "tempat_lahir")
                ->sortable()
                ->searchable(),
            Column::make("Jenis Kelamin", "jenis_kelamin")
                ->sortable()
                ->searchable()
                ->format(function ($value) {
                    return $value == "L" ? "Laki-laki" : "Perempuan";
                }),
            Column::make('Jurusan Pilihan 1', 'jurusan_pilihan1')
                ->sortable()
                ->searchable(),
            Column::make('Jurusan Pilihan 2', 'jurusan_pilihan2')
                ->sortable()
                ->searchable(),
            Column::make('Jurusan Pilihan 3', 'jurusan_pilihan3')
                ->sortable()
                ->searchable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Actions", "id")
                ->format(function ($value) {
                    return view("components.datatables-dropdown", ["id" => $value, 'pendaftaran' => true]);
                })
        ];
    }

    #[On('confirmDelete')]
    public function confirmDelete($id)
    {
        $this->js(
            "confirm('Are you sure you want to delete this data?') || event.stopImmediatePropagation()"
        );
        $data = Pendaftaran::find($id);
        $data->delete();
    }

    public function lihatPendaftaran($id)
    {
        $this->redirect(route('admin.pendaftar.show', $id), true);
    }

    public function hapusPendaftaran($id)
    {
        $this->confirmDelete($id);
        $this->dispatch('saved', 'success', 'Data pendaftar berhasil dihapus');
    }
}
