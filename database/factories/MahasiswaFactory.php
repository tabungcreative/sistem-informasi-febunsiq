<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nim' => fake()->uuid(),
            'nama' => fake()->name(),
            'prodi' => Arr::random(['Manajemen', 'Akuntansi', 'Perbankan Syariah']),
            'jenis_kelamin' => Arr::random(['L', 'P']),
            'nomer_hp' => fake()->phoneNumber()
        ];
    }
}
