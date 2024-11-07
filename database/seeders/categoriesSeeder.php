<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\categories;
use App\Models\courses;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        categories::create([
            'NamaBidang' => 'Data Science',
            'Writer' => 'Bia Mecca Annisa'
        ]);

        categories::create([
            'NamaBidang' => 'Network Security',
            'Writer' => 'Abi Firmansyah'
        ]);
    }
}
