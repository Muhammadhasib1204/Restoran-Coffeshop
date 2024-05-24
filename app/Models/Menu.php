<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    
    protected $fillable = [
        'id_toko',
        'nama_menu',
        'jenis_menu',
    ];
    
    
    public function Toko()
    {
        return $this->belongsTo(Toko::class, 'id_toko');
    }

}
