<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $adminRole = Role::create(['name' => 'admin']);
        $instructorRole = Role::create(['name' => 'instructor']);
        $studentRole = Role::create(['name' => 'student']);

        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@main.com',
        ]);
        $instructor = User::factory()->create([
            'name' => 'Instructor User',
            'email' => 'instructor@main.com',
        ]);
        $student = User::factory()->create([
            'name' => 'Student User',
            'email' => 'student@main.com',
        ]);

        $admin->assignRole($adminRole);
        $instructor->assignRole($instructorRole);
        $student->assignRole($studentRole);

    }
}
