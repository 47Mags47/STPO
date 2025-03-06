<?php

namespace Database\Factories\Main;

use App\Models\Main\Division;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Main\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_name = fake('ru_RU')->userName();

        return [
            'last_name' => fake('ru_RU')->lastName('male'),
            'first_name' => fake('ru_RU')->firstName('male'),
            'middle_name' => fake('ru_RU')->lastName('male') . 'ич',
            'full_name' => $user_name,
            'phone' => fake('ru_RU')->phoneNumber(),
            'email' => fake('ru_RU')->email(),
            'login' => $user_name,
            'password' => Hash::make($user_name),
            'logo' => null,
            'division_id' => Division::all()->random()->id,
            'email_verified_at' => rand(1,2) === 1 ? now() : null,
        ];
    }
}
