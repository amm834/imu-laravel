<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'full_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'date_of_birth' => '',
            'phone_number' => '',
            'guardian_name' => '',
            'guardian_phone_number' => '',
            'address' => '',
            'registration_date' => '',
            'payment_type' => '',
            'amount' => '',
            'role' => 'admin',
        ]);
    }
}
