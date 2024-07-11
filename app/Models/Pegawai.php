<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $fillable = ['nip', 'gender', 'tmp_lahir', 'tgl_lahir', 'telpon', 'alamat', 'divisi_iddivisi'];
    
    //disable created_at and updated_at field
    public $timestamps = false;

    public function Divisi(){
        return $this->belongsTo(Divisi::class); //belongsTo -> one to many
    }
}
