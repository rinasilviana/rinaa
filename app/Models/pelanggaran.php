<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis',
        'konsekuensi',
        'poin',
    ];
}
