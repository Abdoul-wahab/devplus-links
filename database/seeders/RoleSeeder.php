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
            'display_name' => 'Super Administrator',
            'description' => 'This user can do everything',
        ]);

        $manager = Role::create([
            'name' => 'manager',
            'display_name' => 'User Administrator',
            'description' => 'User is allowed to manage and edit other users',
        ]);

        $regularUser = Role::create([
            'name' => 'regular-user',
            'display_name' => 'Regular User',
            'description' => 'Regular User',
        ]);

        $owner = Role::create([
            'name' => 'owner',
            'display_name' => 'Project Owner', // optional
            'description' => 'User is the owner of a given project', // optional
        ]);
    }
}
