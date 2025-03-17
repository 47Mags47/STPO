<?php

namespace Database\Factories\CSVI\Appeal;

use App\Models\CSVI\Appeal\Status;
use App\Models\CSVI\Appeal\Them;
use App\Models\Main\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CSVI\Appeal\Appeal>
 */
class AppealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sender = User::all()->random();
        $status = Status::all()->random();

        return [
            'office' => rand(100, 450),
            'comment' => $this->faker->paragraph(),
            'them_id' => Them::all()->random()->id,
            'status_code' => $status->code,
            'sender_id' => $sender->id,

            'accepted_by' => $status->code == 'accepted'
                ? 2
                : null,
            'closed_by' => $status->code == 'closed'
                ? 2
                : null,
            'restored_by' => $status->code == 'restored'
                ? 2
                : null,
        ];
    }
}
