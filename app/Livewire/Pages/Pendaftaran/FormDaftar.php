<?php

namespace App\Livewire\Pages\Pendaftaran;

use App\Models\Pendaftaran;
use Livewire\Component;

class FormDaftar extends Component
{
    public $index = 0;
    public $lastIndex = 3;

    public function setIndex($index)
    {
        $this->index = $index;
    }

    public function NextIndex()
    {
        if ($this->index < $this->lastIndex) {
            $this->index++;
        }
    }

    public function PrevIndex()
    {
        if ($this->index > 0) {
            $this->index--;
        }
    }

    public function render()
    {
        return view('livewire.pages.pendaftaran.form-daftar');
    }
}
