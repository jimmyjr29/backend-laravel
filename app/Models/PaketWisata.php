<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi', 'harga', 'destinasi_id'];
    

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class);
    }
}
