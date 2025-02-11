<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'gambar','deskripsi', 'lokasi'];

    public function paketWisata()
    {
        return $this->hasMany(PaketWisata::class);
    }
}
