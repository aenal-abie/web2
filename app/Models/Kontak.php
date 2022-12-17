<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class  Kontak extends Model {
    protected $table = "kontaks";

    protected $fillable = [
        "nama", "email", "no_hp", "catatan"
    ];

    public function artikel() {
        return $this->hasMany(Artikel::class, "kontaks_id");
    }
}
