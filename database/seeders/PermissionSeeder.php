<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Seed application permissions used by Filament resources.
     */
    public function run(): void
    {
        $guardName = config('auth.defaults.guard', 'web');

        $permissions = [
            // Posts
            'posts.view',
            'posts.create',
            'posts.edit',
            'posts.delete',

            // Users
            'users.view',
            'users.create',
            'users.edit',
            'users.delete',

            // Roles
            'roles.view',
            'roles.create',
            'roles.edit',
            'roles.delete',

            // Permissions
            'permissions.view',
            'permissions.create',
            'permissions.edit',
            'permissions.delete',

            // Categories (kategorie usług)
            'categories.view',
            'categories.create',
            'categories.edit',
            'categories.delete',
        ];

        foreach ($permissions as $permissionName) {
            Permission::firstOrCreate([
                'name' => $permissionName,
                'guard_name' => $guardName,
            ]);
        }

        // Jeśli cache permissions jest nieaktualny, dajemy mu sygnał odświeżenia
        // zanim zaczniemy przypinać uprawnienia do roli.
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        // Ensure admin role has full access to all seeded permissions.
        $adminRole = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => $guardName,
        ]);

        $adminRole->givePermissionTo($permissions);
    }
}

