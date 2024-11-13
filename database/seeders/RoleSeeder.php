<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'admin', 'display_name' => 'Administrador', 'description' => 'User is allowed to manage and edit other users'],
            ['name' => 'creator', 'display_name' => 'Creador', 'description' => 'User is allowed to create posts'],
            ['name' => 'editor', 'display_name' => 'Editor', 'description' => 'User is allowed to edit posts'],
            ['name' => 'validator', 'display_name' => 'Validador', 'description' => 'User is allowed to validate posts'],
            ['name' => 'eraser', 'display_name' => 'Eliminador', 'description' => 'User is allowed to delete posts'],
            ['name' => 'reader', 'display_name' => 'Lector', 'description' => 'User is allowed to read posts'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
