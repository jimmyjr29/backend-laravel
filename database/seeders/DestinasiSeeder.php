<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destinasi;
use Illuminate\Support\Facades\Storage; // Import kelas Storage

class DestinasiSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus semua file yang mungkin sudah ada di folder gambar sebelum menambahkan data baru
        // Storage::disk('public')->deleteDirectory('gambar');
        Storage::disk('public')->delete('gambar/*');
        
        // Tambahkan data destinasi
        Destinasi::factory(10)->create();
    }
}
