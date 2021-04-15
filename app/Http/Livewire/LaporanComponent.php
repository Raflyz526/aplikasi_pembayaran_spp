<?php

namespace App\Http\Livewire;

use App\Models\pembayaran;
use Livewire\Component;
use PDF;

class LaporanComponent extends Component
{
    public $nisn,$bulan,$tahun;
    public $pembayaran=[];

    public function laporan(){
        $this->pembayaran=pembayaran::join('siswas', 'siswas.nisn', '=', 'pembayarans.nisn')
            ->join('spps', 'spps.id', '=', 'pembayarans.id_spp')
            ->join('kelas', 'kelas.id', '=', 'siswas.id_kelas')
            ->where('siswas.nisn', $this->nisn)
            // ->orWhere('pembayarans.bulan_dibayar', 'LIKE', "%this->bulan%")
            ->where('pembayarans.tahun_dibayar', $this->tahun)
            ->get(['pembayarans.*','spps.*','kelas.*','siswas.*']);
    }

    public function showPembayarans(){
        $pembayaran = Pembayaran::all();
        return view('laporan-component', compact('pembayaran'));
      }
  
      // Generate PDF
      public function createPDF() {
          $pembayaran = Pembayaran::join('siswas', 'pembayarans.nisn', '=', 'siswas.nisn')
            ->join('kelas', 'siswas.id_kelas', '=', 'kelas.id')
            ->join('spps', 'siswas.id_spp', '=', 'spps.id')
            ->get(['pembayarans.*', 'siswas.*', 'kelas.*', 'spps.*']);;
          // retreive all records from db
    
          // share data to view
          $pdf = PDF::loadView('livewire.pdf-component', ['pembayaran' => $pembayaran]);
    
          // download PDF file with download method
          // return $pdf->stream();
          return $pdf->download('laporan-spp.pdf');
        }

    public function render()
    {
        return view('livewire.laporan-component')->layout('layouts.base');
    }
}
