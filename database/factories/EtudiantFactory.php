<?php

namespace Database\Factories;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Etudiant::class;
    public function definition(): array
    {
        return [
            'nom' => fake()->lastName,
            'prenom' => fake()->firstName(),
            'classe_id' => rand(1,7),
        ];
    }
}
