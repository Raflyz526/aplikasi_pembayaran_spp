<?php

namespace App\Http\Livewire;

use App\Models\siswa;
use App\Models\pembayaran;
use Livewire\Component;
use PDF;

class PdfComponent extends Component
{
    public function render()
    {
        return view('livewire.pdf-component')->layout('layouts.base');
    }
}
