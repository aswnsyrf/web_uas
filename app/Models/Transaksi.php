<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_customer',
        'produk',
        'durasi',
        'tanggal_sewa',
        'tanggal_kembalian',
        'harga',
    ];

    public function produkk()
    {
        return $this->belongsTo(Product::class, 'produk', 'id');
    }
}
