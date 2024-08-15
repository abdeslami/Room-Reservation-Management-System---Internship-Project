<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        DB::table('reservation')->insert([

            [
                "nom_re"=>"réservarion 1",
                "etat_re"=>"active",
                "date_debut_re"=>"2024-04-10",
                "date_fin_re"=>"2024-05-10",
                "id_chambre"=>"17",
                "id_user"=>"38",
            ],
            [
                "nom_re"=>"réservarion 1",
                "etat_re"=>"active",
                "date_debut_re"=>"2024-04-10",
                "date_fin_re"=>"2024-05-10",
                "id_chambre"=>"2",
                "id_user"=>"35",
            ], [
                "nom_re"=>"réservarion 1",
                "etat_re"=>"active",
                "date_debut_re"=>"2024-04-10",
                "date_fin_re"=>"2024-05-10",
                "id_chambre"=>"2",
                "id_user"=>"34",
            ], [
                "nom_re"=>"réservarion 1",
                "etat_re"=>"active",
                "date_debut_re"=>"2024-04-10",
                "date_fin_re"=>"2024-05-10",
                "id_chambre"=>"6",
                "id_user"=>"32",
            ], [
                "nom_re"=>"réservarion 1",
                "etat_re"=>"active",
                "date_debut_re"=>"2024-04-10",
                "date_fin_re"=>"2024-05-10",
                "id_chambre"=>"2",
                "id_user"=>"33",
            ], [
                "nom_re"=>"réservarion 1",
                "etat_re"=>"active",
                "date_debut_re"=>"2024-04-10",
                "date_fin_re"=>"2024-05-10",
                "id_chambre"=>"2",
                "id_user"=>"31",
            ], [
                "nom_re"=>"réservarion 1",
                "etat_re"=>"active",
                "date_debut_re"=>"2024-04-10",
                "date_fin_re"=>"2024-05-10",
                "id_chambre"=>"8",
                "id_user"=>"36",
            ], [
                "nom_re"=>"réservarion 1",
                "etat_re"=>"active",
                "date_debut_re"=>"2024-04-10",
                "date_fin_re"=>"2024-05-10",
                "id_chambre"=>"2",
                "id_user"=>"37",
            ], [
                "nom_re"=>"réservarion 1",
                "etat_re"=>"active",
                "date_debut_re"=>"2024-04-10",
                "date_fin_re"=>"2024-05-10",
                "id_chambre"=>"2",
                "id_user"=>"36",
            ], [
                "nom_re"=>"réservarion 1",
                "etat_re"=>"active",
                "date_debut_re"=>"2024-04-10",
                "date_fin_re"=>"2024-05-10",
                "id_chambre"=>"25",
                "id_user"=>"30",
            ], [
                "nom_re"=>"réservarion 1",
                "etat_re"=>"active",
                "date_debut_re"=>"2024-04-10",
                "date_fin_re"=>"2024-05-10",
                "id_chambre"=>"22",
                "id_user"=>"29",
            ], [
                "nom_re"=>"réservarion 1",
                "etat_re"=>"active",
                "date_debut_re"=>"2024-04-10",
                "date_fin_re"=>"2024-05-10",
                "id_chambre"=>"18",
                "id_user"=>"28",
            ],

        ]);

    }
}
// php artisan db:seed --class=ChambreSeeder   