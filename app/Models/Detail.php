<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    public function transaksi(){
        return $this->belongsTo(Transaksi::class);
    }

    public function barang(){
        return $this->belongsTo(Barang::class);
    }
}
