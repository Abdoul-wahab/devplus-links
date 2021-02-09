<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = Role::create([
            'name' => 'super-admin',
            'display_name' => 'Website Administrator',
            'description' => 'This user can do everything',
        ]);

        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Users Administrator',
            'description' => 'User is allowed to manage and edit other users',
        ]);

        $manager = Role::create([
            'name' => 'manager',
            'display_name' => 'Project Administrator',
            'description' => 'Project is allowed to manage and edit other users',
        ]);

        $owner = Role::create([
            'name' => 'owner',
            'display_name' => 'Project Owner',
            'description' => 'User is the owner of a given project',
        ]);
    }
}
