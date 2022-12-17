<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Artikel extends Model {
    protected $fillable = [
        "judul", "isi", "kontak_id"
    ];

    public function kontak(){
        return $this->belongsTo(Kontak::class, "kontaks_id");
    }

    public function kategory(){
        return $this->belongsTo(Kategory::class, "kategory_id");
    }

}
