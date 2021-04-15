<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\spp;

class SppForm extends Component
{

    public $tahun,$nominal,$idAction;
    public $idSpp=[];
    protected $listeners=[
        'getModalId'
    ];

    public function getModalId($idUpdate){
        $this->idAction=$idUpdate;
        $idspp=spp::find($this->idAction);
        $this->tahun=$idspp->tahun;
        $this->nominal=$idspp->nominal;
    }

    public function simpan(){
        $data=[
        'tahun'=>$this->tahun,
        'nominal'=>$this->nominal
        ];
        // dd($data);
        //spp::create($data);

    $idData=[
        'id'=>$this->idAction
    ];

    $dataUpdateSpp=spp::where('id',$idData)->first();
    if( $dataUpdateSpp == null){
        spp::create($data);
        $this->resetVar($data);
        // dd("tambah");
    }else{
        spp::find($idData)->first()->update($data);
        // dd("ubah");
    }
}

    private function resetVar($data){
        $this->tahun=null;
        $this->nominal=null;
    }

    public function render()
    {
        return view('livewire.spp-form');
    }
}
