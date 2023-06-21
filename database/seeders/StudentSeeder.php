<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = [
        'name' => 'Kalam Azad',
        'email' => 'student@example.com',
        'password' => bcrypt('123456789')
    ];
    Student::create($student); 
}
}
