<?php

namespace Database\Seeders;

use App\Models\Role;
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

        $createPost = Permission::create([
            'name' => 'view-post',
            'display_name' => 'Create Posts', // optional
            'description' => 'create new blog posts', // optional
        ]);

        $createPost = Permission::create([
            'name' => 'create-post',
            'display_name' => 'Create Posts', // optional
            'description' => 'create new blog posts', // optional
        ]);
            
        $editUser = Permission::create([
            'name' => 'edit-user',
            'display_name' => 'Edit Users', // optional
            'description' => 'edit existing users', // optional
        ]);

        $editUser = Permission::create([
            'name' => 'edit-user',
            'display_name' => 'Edit Users', // optional
            'description' => 'edit existing users', // optional
        ]);
        
    }
}
