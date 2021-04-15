<?php

namespace App\Http\Livewire;

use App\Models\pembayaran;
use Livewire\Component;
use Illuminate\Http\Request;
use PDF;

class HistoryComponent extends Component
{

    public function render()
    {
        $pembayaran=pembayaran::latest()->get();
        return view('livewire.history-component',['pembayaran'=> $pembayaran])->layout('layouts.base');
    }
}
