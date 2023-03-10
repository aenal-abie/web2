<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public function member() {
        return $this->belongsTo(Member::class);
    }

    public function detail(){
        return $this->hasMany(Detail::class);
    }
}
