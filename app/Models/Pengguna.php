<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'penggunas';
    
    protected $fillable = [
        'nama',
        'email',
        'password',
        'id_admin',
        'id_pemilik',
        'id_customer',
    ];
    
    public function Admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
    
    public function Pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'id_pemilik');
    }
    
    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
    
}
