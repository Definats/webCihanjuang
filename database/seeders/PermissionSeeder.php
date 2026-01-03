<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Permission aman (tidak error meskipun sudah ada)
        $viewDashboard = Permission::firstOrCreate([
            'name' => 'view dashboard',
            'guard_name' => 'admins', // pastikan sesuai guard kamu
        ]);

        // Role aman
        $adminRole = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'admins',
        ]);

        // Beri role permission (aman walaupun sudah ada)
        if (!$adminRole->hasPermissionTo($viewDashboard->name)) {
            $adminRole->givePermissionTo($viewDashboard);
        }
    }
}
