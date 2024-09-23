<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;
use App\Functions\Helper;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $new_project = new Project();
            $new_project->title = $faker->sentence(6);
            $new_project->slug = Helper::generateSlug($new_project->title, Project::class);
            $new_project->image = $faker->imageUrl(640,480, 'projects', true);
            $new_project->date = $faker->date('Y-m-d');
            $new_project->description = $faker->paragraph(4);
            $new_project->save();
        }
    }
}
