<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\categories;
use App\Models\courses;

class coursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $dsID = categories::where('NamaBidang', 'Data Science')->first();
        $nsID = categories::where('NamaBidang', 'Network Security')->first();
        $arrCoursesDS = ['Machine Learning', 'Deep Learning', 'Natural Language Processing'];
        $arrCoursesNS = ['Software Security', 'Network Administration', 'Popular Network Processing'];

        if($dsID != null){
            foreach ($arrCoursesDS as $course) {
                courses::create([
                    'NamaKursus' => $course,
                    'categories_id' => $dsID->id,
                    'KontenCourse' => $faker->paragraph(3),
                    'RingkasanDeskripsi' => $faker->text,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

        if($nsID != null){
            foreach ($arrCoursesNS as $course) {
                courses::create([
                    'NamaKursus' => $course,
                    'categories_id' => $nsID->id,
                    'KontenCourse' => $faker->paragraph(3),
                    'RingkasanDeskripsi' => $faker->text,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
        
        
    }
}
