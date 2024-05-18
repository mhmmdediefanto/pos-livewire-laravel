<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'admin', //admin
                'guard_name' => 'web',
            ], [
                'name' => 'kasir', //kasir
                'guard_name' => 'web',
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
