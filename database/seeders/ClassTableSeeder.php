<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SchoolClass;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [   'name' => 'Form 1',
            ],
            [   'name' => 'Form 2',
            ],
            [   'name' => 'Form 3',
            ],
            [   'name' => 'Form 4',
            ],
            [   'name' => 'Form 5',
            ],
            [   'name' => 'Form 6',
            ],
        ];

        foreach ($classes as $class) {
            SchoolClass::create($class);
        }
    }
}
