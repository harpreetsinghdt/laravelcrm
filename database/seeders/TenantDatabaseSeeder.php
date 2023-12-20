<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roleAdmin = Role::create(['name'=>'admin']);
        $roleEditor = Role::create(['name'=>'editor']);
        $roleEmployee = Role::create(['name'=>'employee']);
        $roleUser = Role::create(['name'=>'user']);

        $permissionAll = Permission::create(['name' => 'all']);
        $permissionView = Permission::create(['name' => 'view']);
        $permissionAdd = Permission::create(['name' => 'add']);
        $permissionEdit = Permission::create(['name' => 'edit']);
        $permissionDelete = Permission::create(['name' => 'delete']);

        $roleAdmin->givePermissionTo($permissionAll);
        $roleEditor->givePermissionTo($permissionAll);
        $roleEmployee->syncPermissions([$permissionView,$permissionAdd,$permissionEdit]);
        $roleUser->givePermissionTo($permissionView);       
    }
}