<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $readUser = Permission::create([
            'name' => 'read-user',
            'display_name' => 'Read users',
            'description' => 'Read existing user',
        ]);

        $createUser = Permission::create([
            'name' => 'create-user',
            'display_name' => 'Create users',
            'description' => 'create new blog users',
        ]);
            
        $editUser = Permission::create([
            'name' => 'edit-user',
            'display_name' => 'Edit Users',
            'description' => 'Edit existing users',
        ]);

        $deleteUser = Permission::create([
            'name' => 'delete-user',
            'display_name' => 'Delete Users',
            'description' => 'Delete existing users',
        ]);

        $usersAdmin = Role::where('name', 'super-admin')->first();
        $usersAdmin->attachPermission([$readUser, $createUser, $editUser, $deleteUser]);
        
    }
}
