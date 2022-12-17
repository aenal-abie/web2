<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Kategory extends Model {

    protected $table = "kategorys";

    protected $fillable = [
        "nama"
    ];

    public function artikel(){
        return $this->hasMany(Artikel::class);
    }

}
