<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;
    protected $table = "guru";
    protected $primaryKey = "id_guru";
    protected $fillable = ['nama_siswa', 'angkatan', 'nis', 'kelas', 'alamat'];
    
    public $timestamps = "false";
}
