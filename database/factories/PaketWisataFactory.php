<?php

namespace Database\Factories;

use App\Models\PaketWisata;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaketWisataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PaketWisata::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->sentence,
            'deskripsi' => $this->faker->paragraph,
            'harga' => $this->faker->randomFloat(2, 100, 1000),
            // Mengambil ID destinasi yang sudah ada atau yang dibuat melalui factory.
            'destinasi_id' => function () {
                return \App\Models\Destinasi::factory()->create()->id;
            },
        ];
    }
}