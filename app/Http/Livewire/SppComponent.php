<?php

namespace App\Http\Livewire;

use App\Models\spp;
use Livewire\Component;

class SppComponent extends Component
{
    public $idItem;
    public $actionSelectedItem;

    public function selectedItem($idAction,$action){

        $this->idItem=$idAction;

        if($action=='hapus'){
            $this->dispatchBrowserEvent('openDeleteModal');
        }else{
            $this->emit('getModalId',$this->idItem);
            $this->dispatchBrowserEvent('openUpdateSpp');

        }
    }
    public function hapus(){
        spp::destroy($this->idItem);
        $this->dispatchBrowserEvent('closeDeleteModal');
        return redirect()->route('spp');
    }

    public function render()
    {
        $dataSpp=spp::latest()->get();
        return view('livewire.spp-component',['spp'=> $dataSpp])->layout('layouts.base');
    }
}
