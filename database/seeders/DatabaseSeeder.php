<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(69)->create();
        \App\Models\User::factory()->create([
            'name' => 'mimmu',
            'email' => 'mimmu@maa.com',
        ]);
    }
}
