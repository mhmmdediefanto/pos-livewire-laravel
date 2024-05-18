<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = [
            //kasir
            [ //dashboard
                'name' => 'view dashboard',
                'guard_name' => 'web',
            ], [ //transaksi
                'name' => 'transaksi',
                'guard_name' => 'web',
            ], [ //keuangan
                'name' => 'create pemasukan',
                'guard_name' => 'web',
            ], [ // laporan
                'name' => 'view laporan',
                'guard_name' => 'web',
            ],
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
