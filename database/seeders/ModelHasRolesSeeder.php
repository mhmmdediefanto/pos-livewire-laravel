<?php

namespace Database\Seeders;

use App\Models\ModelHasRoles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelRolesHasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modelHasRoles = [
            [
                'role_id' => 1, //admin
                'model_type' => 'App\Models\User',
                'model_id' => 1
            ], [
                'role_id' => 2, //kasir
                'model_type' => 'App\Models\User',
                'model_id' => 2
            ]
        ];

        foreach ($modelHasRoles as $modelHasRole) {
            ModelHasRoles::create($modelHasRole);
        }
    }
}
