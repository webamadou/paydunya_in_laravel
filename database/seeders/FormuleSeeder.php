<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formule;
use Illuminate\Support\Facades\DB;

class FormuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formules')->insert([
             [
                'name'      => 'Freelancer',
                'title'      => 'Formule pour les freelancer',
                'price'     => 5000,
                'storage'   => 2,
                'nbr_user'  => 10,
                'email_support' => 1,
                'help_center' => 1,
            ],
             [
                'name'      => 'Pro',
                'title'      => 'Formule pour les Entreprises niveau 1',
                'price'     => 15000,
                'storage'   => 15,
                'nbr_user'  => '30',
                'email_support' => 1,
                'help_center' => 1,
            ],
             [
                'name'      => 'Entreprise',
                'title'      => 'Formule pour les Entreprises niveau 2',
                'price'     => 30000,
                'storage'   => 30,
                'nbr_user'  => 'Illimite',
                'email_support' => 1,
                'help_center' => 1,
            ]
        ]);
    }
}
