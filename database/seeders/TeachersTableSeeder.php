<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Teacher;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject=Subject::first('id');
        Teacher::create([
            'f_name' => 'John',
            's_name' => 'Doe',
            'password' => 'John@1234',
            'phone' => '1234567890',
            'email' => 'johndoe@example.com',
            'address' => '123 Main St, Anytown USA',
        ]);

        Teacher::create([
            'f_name' => 'Jane',
            's_name' => 'Smith',
            'password' => 'John@1234',
            'phone' => '1234567890',
            'email' => 'janesmith@example.com',
            'address' => '456 High St, Anytown USA',
        ]);

        Teacher::create([
            'f_name' => 'Bob',
            's_name' => 'johnson',
            'password' => 'John@1234',
            'phone' => '1234567890',
            'email' => 'bobjohnson@example.com',
            'address' => '789 Park Ave, Anytown USA',
        ]);

        Teacher::create([
            'f_name' => 'Sara',
            's_name' => 'Wiliams',
            'password' => 'John@1234',
            'phone' => '1234567890',
            'email' => 'sarawilliams@example.com',
            'address' => '456 Elm St, Anytown USA',
        ]);

        Teacher::create([
            'f_name' => 'mike',
            's_name' => 'brown',
            'password' => 'John@1234',
            'phone' => '1234567890',
            'email' => 'mikebrown@example.com',
            'address' => '789 Oak St, Anytown USA',
        ]);

        Teacher::create([
            'f_name' => 'Karen',
            's_name' => 'Lee',
            'password' => 'John@1234',
            'phone' => '1234567890',
            'email' => 'karenlee@example.com',
            'address' => '123 Pine St, Anytown USA',
        ]);
    }
}

