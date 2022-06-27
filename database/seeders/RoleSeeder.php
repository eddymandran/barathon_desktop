<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
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
                'name' => 'Admin',
                'description' => 'Accès à toutes les parties du site. Role à destination des developpeur  ',
            ],
            [
                'name' => 'Utilisateur',
                'description' => 'Accès à la partie evenement, au profil, a l\'annuaire',
            ],
            [
                'name' => 'Professionnel',
                'description' => 'Accès à la partie evenement, au profil, a l\'annuaire`\' ainsi qu\'a la partie bar',
            ],
        ];

        foreach ($datas as $data) {
            Roles::create($data);
        }
    }
}
