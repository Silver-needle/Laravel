<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(): void
    {
        \DB::table('news')->insert($this->getData());
    }

    public function getData(): array
    {
        $quantityUsers = 10;
        $users = [];
        for ($i = 0; $i < $quantityUsers; $i++) {
            $news[] = [
                'id' => 1,
                'login' => fake()->userName(),
                'email'  => fake()->freeEmail(),
                'password' => fake()->text(20),
            ];
        }

        return $users;
    }
}
