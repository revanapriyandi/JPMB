<?php

namespace App\Livewire\Pages\Pendaftaran;

use Livewire\Component;
use Barryvdh\DomPDF\PDF;
use App\Models\Pendaftaran;

class FormDaftar extends Component
{


    public function render()
    {
        return view('livewire.pages.pendaftaran.form-daftar');
    }
}
