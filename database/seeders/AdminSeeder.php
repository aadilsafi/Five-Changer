<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'User']);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ])->assignRole('Admin');
    }
}
