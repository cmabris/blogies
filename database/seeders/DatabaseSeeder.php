<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        User::factory()->create([
            'name' => 'Pepe',
            'last_name' => 'Perez',
            'avatar' => 'pepote',
            'email' => 'pepe@mail.es',
            'password' => bcrypt('12345678'),
            'role_id' => 1,
        ]);

        $users = User::factory(25)->make();

        $users->each(function ($user) {
            $num = rand(1, 10);
            if ($num > 5) {
                $role_id = 6;
            } else {
                $role_id = $num;
            }
            $user->role_id = $role_id;
            $user->save();
        });

        $users->each(function ($user) {
            $user->posts()->saveMany(
                Post::factory(10)->make()
            );
        });
    }
}
