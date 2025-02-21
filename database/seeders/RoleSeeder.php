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
    public function run()
    {
        $roles = [
            ['name' => 'Admin', 'description' => 'System Administrator', 'IsActive' => 1],
            ['name' => 'Accountant', 'description' => 'Manages financial records', 'IsActive' => 1],
            ['name' => 'Abstract Verifier', 'description' => 'Verifies abstract submissions', 'IsActive' => 1],
            ['name' => 'Users', 'description' => 'General system users', 'IsActive' => 1],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
