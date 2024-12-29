<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'department_id' => 1,
            'name' => 'Admnistrador',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('goku9413'),
            'role' => 'admin',
            'permissions' => '["admin"]',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('user_details')->insert([
            'user_id' => 1,
            'address' => 'Rua do admin 123',
            'zip_code' => '1234-123',
            'city' => 'Praia grande',
            'phone' => '139981622833',
            'salary' => '20000.00',
            'admission_date' => '2020-01-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('departments')->insert([
            'name' => 'Administração',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
