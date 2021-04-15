<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    //protected $table="pembayaran";
    protected $fillable=['id_petugas','nisn','bulan_dibayar','tahun_dibayar','id_spp','jumlah_dibayar'];
}
