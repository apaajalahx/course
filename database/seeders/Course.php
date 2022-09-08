<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course as ModelsCourse;

class Course extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsCourse::insert([
            [
                'name' => 'C++'
            ],
            [
                'name' => 'Python'
            ],
            [
                'name' => 'Javascript'
            ],
            [
                'name' => 'Golang'
            ],
            [
                'name' => 'PHP'
            ],
            [
                'name' => 'HTML'
            ]
        ]);
    }
}
