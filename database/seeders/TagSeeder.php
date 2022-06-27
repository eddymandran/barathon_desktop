<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'name' => 'Electro',
            ],
            [
                'name' => 'Funk',
            ],
            [
                'name' => 'Cocktail',
            ],
            [
                'name' => 'Costumé',
            ],
            [
                'name' => 'Dansant',
            ],
            [
                'name' => 'Black & White',
            ]
        ];
        foreach ($datas as $data) {
            Tags::create($data);
        }
    }
}
