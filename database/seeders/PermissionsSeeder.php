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

            [
                //admin
                'name' => 'view dashboard',
                'guard_name' => 'web',
            ], [
                'name' => 'create barang atau jasa',
                'guard_name' => 'web',
            ], [
                'name' => 'edit barang atau jasa',
                'guard_name' => 'web',
            ], [
                'name' => 'delete barang atau jasa',
                'guard_name' => 'web',
            ], [
                'name' => 'create kategori',
                'guard_name' => 'web',
            ], [
                'name' => 'edit kategori',
                'guard_name' => 'web',
            ], [
                'name' => 'delete kategori',
                'guard_name' => 'web',
            ], [
                'name' => 'create diskon',
                'guard_name' => 'web',
            ], [
                'name' => 'edit diskon',
                'guard_name' => 'web',
            ], [
                'name' => 'delete diskon',
                'guard_name' => 'web',
            ], [
                'name' => 'create pajak',
                'guard_name' => 'web',
            ], [
                'name' => 'edit pajak',
                'guard_name' => 'web',
            ], [
                'name' => 'delete pajak',
                'guard_name' => 'web',
            ], [
                'name' => 'create biaya',
                'guard_name' => 'web',
            ], [
                'name' => 'edit biaya',
                'guard_name' => 'web',
            ], [
                'name' => 'delete biaya',
                'guard_name' => 'web',
            ], [
                'name' => 'view pemasukan',
                'guard_name' => 'web',
            ], [
                'name' => 'view pengeluaran',
                'guard_name' => 'web',
            ], [
                'name' => 'view kategori pemasukan',
                'guard_name' => 'web',
            ], [
                'name' =>  'create kategori pemasukan'
            ], [
                'name' => 'edit kategori pemasukan'
            ], [
                'name' => 'delete kategori pemasukan',
                'guard_name' => 'web',
            ], [
                'name' => 'view kategori pengeluaran',
                'guard_name' => 'web',
            ], [
                'name' => 'create kategori pengeluaran',
                'guard_name' => 'web',
            ], [
                'name' => 'edit kategori pengeluaran',
                'guard_name' => 'web',
            ], [
                'name' => 'delete kategori pengeluaran',
                'guard_name' => 'web',
            ], [
                'name' => 'view laporan',
                'guard_name' => 'web',
            ], [
                'name' => 'view laporan penjualan',
                'guard_name' => 'web',
            ], [
                'name' => 'view laporan penjualan per barang',
                'guard_name' => 'web',
            ], [
                'name' => 'view laporan pemasukan',
                'guard_name' => 'web',
            ], [
                'name' => 'view laporan pengeluaran',
                'guard_name' => 'web',
            ], [
                'name' => 'view menu',
                'guard_name' => 'web',
            ], [
                'name' => 'create role',
                'guard_name' => 'web',
            ], [
                'name' => 'edit role',
                'guard_name' => 'web',
            ], [
                'name' => 'delete role',
                'guard_name' => 'web',
            ], [
                'name' => 'view pengguna',
                'guard_name' => 'web',
            ], [
                'name' => 'create pengguna',
                'guard_name' => 'web',
            ], [
                'name' => 'edit pengguna',
                'guard_name' => 'web',
            ], [
                'name' => 'delete pengguna',
                'guard_name' => 'web',
            ], [
                'name' => 'view permission',
                'guard_name' => 'web',
            ], [
                'name' => 'create permission',
                'guard_name' => 'web',

            ], [
                'name' => 'edit permission',
                'guard_name' => 'web',
            ], [
                'name' => 'delete permission',
                'guard_name' => 'web',
            ], [
                'name' => 'view toko',
                'guard_name' => 'web',
            ], [
                'name ' => 'konfigurasi toko',
                'guard_name' => 'web',
            ], [
                'name' => 'pengaturan cetak struk',
                'guard_name' => 'web',
            ], [
                'name' => 'integrasi sistem',
                'guard_name' => 'web',
            ], [
                'name' => 'edit toko',
                'guard_name' => 'web',
            ]
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
