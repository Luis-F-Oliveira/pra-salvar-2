<?php

namespace Database\Factories;

use App\Models\Staffing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Information>
 */
class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matriculation' => $this->faker->unique()->randomNumber(8),
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['M', 'F']),
            'admission_date' => $this->faker->date($format = 'Y-m-d'),
            'cpf' => $this->faker->unique()->randomNumber(9),
            'birth_date' => $this->faker->date($format = 'Y-m-d'),
            'rg' => $this->faker->unique()->randomNumber(8),
            'issue_rg' => $this->faker->text(16),
            'uf_rg' => $this->faker->text(16),
            'mother_name' => $this->faker->name('female'),
            'father_name' => $this->faker->name('male'),
            'birthplace' => $this->faker->city,
            'nationality' => $this->faker->country,
            'nationality_uf' => 'MT',
            'blood_type' => $this->faker->randomElement(['A+', 'AB+', 'B+', 'O+', 'A-', 'AB-', 'B-', 'O-']),
            'identification_number' => "0",
            'issue_date' => $this->faker->date($format = 'Y-m-d'),
            'staffing_id' => Staffing::pluck('id')->random()
        ];
    }
}
