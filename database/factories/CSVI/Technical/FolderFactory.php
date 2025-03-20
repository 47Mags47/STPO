<?php

namespace Database\Factories\CSVI\Technical;

use App\Models\CSVI\Technical\Folder;
use App\Models\Main\Division;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CSVI\Technical\Folder>
 */
class FolderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $division = Division::all()->random();
        $available_folders = Folder::where('division_id', $division->id)->get();

        return [
            'parent_id'     => rand(1, 2) == 1
                ? ($available_folders->count() > 0 ? $available_folders->random()->id : null)
                : null,
            'division_id'   => $division->id,
            'name'          => $this->faker->word(),
        ];
    }
}
