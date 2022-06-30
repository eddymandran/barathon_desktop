<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $roleAdmin = Roles::where('name', 'Admin')->first();
//        $roleUtilisateur = Roles::where('name', 'Utilisateur')->first();
//        $roleProfessionnel = Roles::where('name', 'Professionnel')->first();

        $datas = [
            [
                'name' => 'John',
                'firstname' => 'Doe',
                'email' => 'admin@mail.fr',
                'password' => Hash::make('azertyuiop'),
                'address' => '55 Rue du Faubourg Saint-Honoré',
                'city' => 'Paris',
                'zip_code' => '75008',
                'birthday' => '1985-11-17',
                'role' => 'admin'
            ],
            [
                'name' => 'Disney',
                'firstname' => 'Walt',
                'email' => 'utilisateur@mail.fr',
                'password' => Hash::make('azertyuiop'),
                'address' => 'Boulevard du Parc',
                'city' => 'Coupvray',
                'zip_code' => '77700',
                'birthday' => '1995-05-27',
                'role' => 'utilisateur'
            ],
            [
                'name' => 'Churchill',
                'firstname' => 'Winston',
                'email' => 'professionnel@mail.fr',
                'password' => Hash::make('azertyuiop'),
                'address' => '18 Rue du 4 septembre',
                'city' => 'Paris',
                'zip_code' => '75002',
                'birthday' => '1989-04-05',
                'role' => 'professionnel'
            ],

        ];

        foreach ($datas as $data) {
            User::create($data);
        }
    }
}
