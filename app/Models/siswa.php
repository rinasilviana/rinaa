<?php

namespace App\Models;
use Illuminate\Database\eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'id_user' ,
        'image' ,
        'nis' ,
        'tingkatan' ,
        'jurusan' ,
        'kelas' ,
        'hp' ,
        'status' ,
    ];
}
