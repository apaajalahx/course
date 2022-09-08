<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mentor as MentorModel;

class Mentor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MentorModel::insert([
            [
                'name' => 'Ahmad'
            ],
            [
                'name' => 'Budi'
            ],
            [
                'name' => 'Rahmad'
            ],
            [
                'name' => 'Dian'
            ],
            [
                'name' => 'Galuh'
            ]
        ]);
    }
}
