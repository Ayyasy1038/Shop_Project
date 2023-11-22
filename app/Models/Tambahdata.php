<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Sanctum\Contracts\HasApiTokens;

class Tambahdata extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'penjual',
        'deskripsi',
        'cover',
        'harga',
    ];

    public function tambahdata()
    {
        return $this->HasMany('app\Models\Tambahdata');
    }
}
