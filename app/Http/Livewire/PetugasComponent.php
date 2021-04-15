<?php

namespace App\Http\Livewire;

use App\Models\petugas;
use Livewire\Component;

class PetugasComponent extends Component
{
    public $idItem;
    public $actionSelectedItem;

    public function selectedItem($idAction,$action){

        $this->idItem=$idAction;

        if($action=='hapus'){
            $this->dispatchBrowserEvent('openDeleteModal');
        }else{
            $this->emit('getModalId',$this->idItem);
            $this->dispatchBrowserEvent('openUpdatePetugas');

        }
    }
    public function hapus(){
        petugas::destroy($this->idItem);
        $this->dispatchBrowserEvent('closeDeleteModal');
        return redirect()->route('petugas');
    }

    public function render()
    {
        $dataPetugas=petugas::latest()->get();
        return view('livewire.petugas-component',['petugas'=> $dataPetugas])->layout('layouts.base');
    }
}
