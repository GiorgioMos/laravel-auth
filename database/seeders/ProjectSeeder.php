<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'progetto 1',
                'description' => 'descrizione lunga',
                'thumb' => 'url img',
            ],
            [
                'title' => 'progetto 2',
                'description' => 'descrizione lunga',
                'thumb' => 'url img',
            ],
            [
                'title' => 'progetto 3',
                'description' => 'descrizione lunga',
                'thumb' => 'url img',
            ],
        ];
        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->fill($project);
            $newProject->save();
        }
    }
}
