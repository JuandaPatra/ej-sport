<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admin = User::create([
        //     'name' => 'superadmin',
        //     'email' => 'super@admin.com',
        //     'password' => bcrypt('password')
        // ]);
        // $admin->assignRole('admin');

        $admin = User::create([
            'name' => 'syahril.anwar@b7leap.com',
            'email' => 'syahril.anwar@b7leap.com',
            'password' => bcrypt('Spartan2023#')
        ]);
        $admin->assignRole('admin');
    }
}