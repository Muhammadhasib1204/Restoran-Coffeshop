<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $table = 'tokos';
    
    protected $fillable = [
        'jenis_toko',
        'alamat',
        'id_pemilik',
    ];
    
    
    public function Pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'id_pemilik');
    }
    

}
