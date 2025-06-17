<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPelanggaran extends Model
{
    protected $fillable = [
        'id_pelanggar',
        'id_pelanggaran',
        'id_user',
        'status',
    ];
}