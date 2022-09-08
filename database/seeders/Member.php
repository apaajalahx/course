<?php

namespace Database\Seeders;

use App\Models\Member as ModelsMember;
use Illuminate\Database\Seeder;

class Member extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsMember::insert([
            [
                'name' => 'Andi'
            ],
            [
                'name' => 'Maulana'
            ],
            [
                'name' => 'Yusuf'
            ],
            [
                'name' => 'Mukhlis'
            ],
            [
                'name' => 'Nova'
            ],
            [
                'name' => 'Santi'
            ],
            [
                'name' => 'Rifai'
            ]
        ]);
    }
}
