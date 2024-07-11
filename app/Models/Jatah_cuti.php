<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jatah_cuti extends Model
{
    use HasFactory;
    
    protected $table = 'jatah_cuti';
    protected $fillable = ['idJatah_cuti', 'tahun', 'jumlah', 'pegawai_nip'];

    //disable created_at and updated_at field
    public $timestamps = false;

    public function pegawai(){
        return $this->belongsTo(Jatah_cuti::class); //belongsTo -> one to many
    }
}
