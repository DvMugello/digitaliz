<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Admin',
            'telpon' => '081234567890',
            'username'=> 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ];

        $cek = User::where('email', $data['email'])->first();

        if (!$cek) {
            $admin = User::create($data);

            $admin->assignRole('admin');
        }
    }
}
