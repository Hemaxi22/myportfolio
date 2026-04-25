<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\SiteSetting;
use App\Models\Skill;
use App\Models\SocialLink;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'admin@hemaxi.dev',
        ], [
            'name' => 'Hemaxi Admin',
            'password' => Hash::make('password'),
        ]);

        $skills = [
            ['PHP', 90], ['Laravel', 88], ['MySQL', 85], ['JavaScript', 78], ['jQuery', 80], ['AJAX', 82],
            ['Bootstrap', 85], ['Git', 75], ['REST API', 82], ['AWS', 70], ['SEO', 72],
        ];
        foreach ($skills as $index => [$name, $percentage]) {
            Skill::updateOrCreate(['name' => $name], [
                'percentage' => $percentage,
                'category' => 'Technical',
                'display_order' => $index + 1,
                'is_active' => true,
            ]);
        }

        $projects = [
            ['Weapplinse Website', 'Designed and developed company website using Laravel with responsive layout and SEO improvements.', ['Laravel', 'PHP', 'SEO']],
            ['Nettpage', 'Implemented feature enhancements, bug fixes, and usability improvements for a web platform.', ['Laravel', 'MySQL', 'jQuery']],
            ['Shuttle Service App', 'Built workflow module to streamline shuttle operations and improve reliability.', ['Laravel', 'AJAX', 'Bootstrap']],
            ['Maintenance App', 'Added encrypted database functionality and integrated AWS services for secure operations.', ['Laravel', 'MySQL', 'AWS']],
            ['Inherit Website', 'Developed will document flow system with improved legal workflow UX.', ['Laravel', 'PHP', 'JavaScript']],
        ];

        foreach ($projects as $index => [$title, $description, $tech]) {
            Project::updateOrCreate(['title' => $title], [
                'slug' => Str::slug($title) . '-' . Str::lower(Str::random(4)),
                'description' => $description,
                'tech_stack' => $tech,
                'display_order' => $index + 1,
                'is_featured' => true,
                'is_active' => true,
            ]);
        }

        SocialLink::updateOrCreate(['platform' => 'LinkedIn'], [
            'url' => 'https://www.linkedin.com/in/hemaxi-rathod-ba0048278',
            'display_order' => 1,
            'is_active' => true,
        ]);

        SiteSetting::updateOrCreate(['key' => 'resume_path'], [
            'value' => 'files/resume/hemaxi-rathod-resume.pdf',
        ]);
    }
}
