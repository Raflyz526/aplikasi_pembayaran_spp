<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\kelas;

class KelasForm extends Component
{

    public $nama_kelas,$kompetensi_keahlian,$idAction;
    public $idKelas=[];
    protected $listeners=[
        'getModalId'
    ];

    public function getModalId($idUpdate){
        $this->idAction=$idUpdate;
        $idkelas=kelas::find($this->idAction);
        $this->nama_kelas=$idkelas->nama_kelas;
        $this->kompetensi_keahlian=$idkelas->kompetensi_keahlian;
    }

    public function simpan(){
        $data=[
        'nama_kelas'=>$this->nama_kelas,
        'kompetensi_keahlian'=>$this->kompetensi_keahlian
        ];
        // dd($data);
        //kelas::create($data);

    $idData=[
        'id'=>$this->idAction
    ];

    $dataUpdateKelas=kelas::where('id',$idData)->first();
    if( $dataUpdateKelas == null){
        kelas::create($data);
        $this->resetVar($data);
        // dd("tambah");
    }else{
        kelas::find($idData)->first()->update($data);
        // dd("ubah");
    }
}

    private function resetVar($data){
        $this->nama_kelas=null;
        $this->kompetensi_keahlian=null;
    }

    public function render()
    {
        return view('livewire.kelas-form');
    }
}
