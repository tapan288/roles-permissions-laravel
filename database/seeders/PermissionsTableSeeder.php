<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'title' => 'permission_create',
            ],
            [
                'title' => 'permission_edit',
            ],
            [
                'title' => 'permission_delete',
            ],
            [
                'title' => 'permission_show',
            ],
            [
                'title' => 'permission_access',
            ],
            [
                'title' => 'role_create',
            ],
            [
                'title' => 'role_edit',
            ],
            [
                'title' => 'role_show',
            ],
            [
                'title' => 'role_delete',
            ],
            [
                'title' => 'role_access',
            ],
            [
                'title' => 'todo_create',
            ],
            [
                'title' => 'todo_edit',
            ],
            [
                'title' => 'todo_show',
            ],
            [
                'title' => 'todo_delete',
            ],
            [
                'title' => 'todo_access',
            ],
        ];

        \App\Models\Permission::insert($permissions);
    }
}
