<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanans';
    
    protected $fillable = [
        'id_menu',
        'jumlah_pesanan',
        'harga',
        'id_customer',
    ];
    
    
    public function Menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
}
