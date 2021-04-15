<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\petugas;
use App\Models\User;

class PetugasForm extends Component
{
    public $username,$password,$idAction;
    protected $listeners=[
        'getModalId'
    ];

    public function getModalId($idUpdate){
        $this->idAction=$idUpdate;
        $idpetugas=petugas::find($this->idAction);
        $this->username=$idpetugas->username;
        $this->password=$idsiswa->password;
    }

    public function simpan(){
        $data=[
        'username'=>$this->username,
        'password'=>$this->password,
        ];
        // dd($data);
        //petugas::create($data);

    $idData=[
        'id'=>$this->idAction
    ];

    $dataUpdatePetugas=petugas::where('id',$idData)->first();
    if( $dataUpdatePetugas == null){
        $petugas = petugas::create($data);
        User::create([
            'name'=>$petugas->username,
            'email'=>$petugas->username.'@spp.com',
            'password'=>bcrypt($petugas->password),
            'level'=>'petugas'
        ]);
        $this->resetVar($data);
        // dd("tambah");
    }else{
        petugas::find($idData)->first()->update($data);
        // dd("ubah");
    }
}

    private function resetVar($data){
        $this->username=null;
        $this->password=null;
    }

    public function render()
    {
        return view('livewire.petugas-form');
    }
}
