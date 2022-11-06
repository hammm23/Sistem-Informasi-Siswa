<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";
    protected $fillable = [
        'nama','nis','nisn','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','status_dlm_keluarga','anak_ke','alamat','no_telp_rumah','sekolah_asal'
    ];
}
