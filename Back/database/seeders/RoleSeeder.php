<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $isAdmin = Role::create(['name' => 'Admin']);
        $isTeamlider = Role::create(['name' => 'TeamLeader']);
        $isUser = Role::create(['name' => 'User']);
 
        Permission::create(['name' => 'admin'])->syncRoles($isAdmin);
        Permission::create(['name' => 'teamleader'])->syncRoles($isTeamlider);
        Permission::create(['name' => 'user'])->syncRoles($isUser);
    }
}
