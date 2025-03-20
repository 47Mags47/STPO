<?php

namespace Database\Factories\CSVI\Technical;

use App\Models\CSVI\Technical\Folder;
use App\Models\CSVI\Technical\Mark;
use App\Models\CSVI\Technical\Type;
use App\Models\Main\Division;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CSVI\Technical\Technical>
 */
class TechnicalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $division = Division::all()->random();
        $mark = Mark::all()->random();
        $available_folders = Folder::where('division_id', $division->id)->get();

        return [
            'division_id'       => $division->id,
            'type_id'           => $mark->type->id,
            'mark_id'           => $mark->id,
            'folder_id'         => rand(1, 2) == 1 ? null : ($available_folders->count() > 0 ? $available_folders->random()->id : null),
            'serial_number'     => $this->faker->numerify('#-###-###'),
            'inventory_number'  => $this->faker->numerify('#-###-###'),
            'exp_date'          => $this->faker->date(),
        ];
    }
}
