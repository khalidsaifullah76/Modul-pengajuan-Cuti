<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan_cuti extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_cuti';
    protected $fillable = ['id', 'tanggal_awal', 'tanggal_akhir','jumlah','ket','status','pegawai_nip'];
       //disable created_at and updated_at field
    public $timestamps = false;

    public function pegawai(){
    return $this->belongsTo(Pengajuan_cuti::class); //belongsTo -> one to many
    }
}
