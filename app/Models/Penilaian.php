<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $table = 'penilaians';
    
    protected $fillable = [
        'id_menu',
        'rating',
        'komentar',
    ];
    
    
    public function Menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}
