<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    use HasFactory;
    protected $table = 'pemiliks';
    
    protected $fillable = [
        'nama_pemilik',
        'alamat',
        'jenis_kelamin',
        'no_telp',
    ];
}
