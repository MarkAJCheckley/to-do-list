<?php

namespace Database\Seeders;

use App\Models\Tasks;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, rand(3,10)) as $index) {
            Tasks::create([
                'name' => $faker->words(rand(2, 5), true),
            ]);
        }
    }
}
