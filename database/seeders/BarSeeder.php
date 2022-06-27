<?php

namespace Database\Seeders;

use App\Models\Bars;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = User::where('name', 'Churchill')->first();

        $datas = [

            [
                'name' => 'Fait Foif',
                'address' => '8 Rue de Paradis',
                'city' => 'Paris',
                'zip_code' => '75010',
                'phone' => '0102030405',
                'email' => 'faitfoif@example.com',
                'siret' => '12356894100056',
                'owner_id' => $owner->id,
            ]
        ];

        foreach ($datas as $data) {
            Bars::create($data);
        }
    }
}
