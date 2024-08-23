<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            [
                'name' => 'Mathematics',
                'code' => 'MAT',
            ],
            [
                'name' => 'English',
                'code' => 'ENG',
            ],
            [
                'name' => 'Biology',
                'code' => 'BIO',
            ],
            [
                'name' => 'Chemistry',
                'code' => 'CHEM',
            ],
            [
                
                'name' => 'Physics',
                'code' => 'PHY',
            ],
            [
                'name' => 'Geography',
                'code' => 'GEO',
            ],
            [
                'name' => 'History',
                'code' => 'HIS',
            ],
            [
                'name' => 'Commerce',
                'code' => 'COMM',
            ],
            [
                'name' => 'Agriculture',
                'code' => 'AGR',
            ],
            [
                'name' => 'Computer',
                'code' => 'COMP',
            ],
            [
                'name' => 'Islamic Religious Education',
                'code' => 'IRE',
            ],
            [
                'name' => 'Christian Religious Education',
                'code' => 'CRE',
            ],
            [
                'name' => 'Luganda',
                'code' => 'LUG',
            ],
            [
                'name' => 'Kiswahili',
                'code' => 'KISW',
            ],
            [
                'name' => 'Art',
                'code' => 'ART',
            ],
            // add more subjects here
        ];

        foreach ($subjects as $subject) {
            Subject::create($subject);
        }
    }
}
