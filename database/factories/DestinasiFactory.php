<?php
namespace Database\Factories;

use App\Models\Destinasi;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class DestinasiFactory extends Factory
{
    protected $model = Destinasi::class;

    public function definition()
    {
        // Generate random image URL
        $imagePath = 'public/gambar'; // Direktori penyimpanan gambar
        $imageUrl = $this->faker->image(storage_path($imagePath), 400, 300, null, false);

        return [
            'nama' => $this->faker->name,
            'gambar' => Storage::url($imageUrl), // Menyimpan URL gambar dalam basis data
            'deskripsi' => $this->faker->paragraph,
            'lokasi' => $this->faker->address
        ];
    }
}
