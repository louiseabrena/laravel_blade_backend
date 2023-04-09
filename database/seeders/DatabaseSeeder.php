<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Education;
use App\Models\Contact;
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

        User::truncate();
        Skill::truncate();
        Project::truncate();
        Education::truncate();
        Contact::truncate();
        
        
        User::factory()->count(2)->create();
        Skill::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Contact::factory()->count(4)->create();
        Education::factory()->count(4)->create();
        
    }
}
