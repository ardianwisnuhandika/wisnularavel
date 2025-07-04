<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomBike extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'frame',
        'warna_frame',
        'handlebar',
        'sadel',
        'ban',
        'gambar',
        'catatan',
        'status'
    ];
}
