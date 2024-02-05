<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UtilisateursTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('utilisateurs')->delete();
        
        \DB::table('utilisateurs')->insert(array (
            0 => 
            array (
                'id_utilisateur' => 1000,
                'nom_utilisateur' => 'Gbenafa',
                'prenom_utilisateur' => 'Alex',
                'adresse_utilisateur' => 'Nord-Foire,Dakar',
                'email_utilisateur' => 'alexgbanafa@gmail.com',
                'telephone_utilisateur' => '+221771096643',
                'role_utilisateur' => 'Client',
                'mot_de_passe' => 'KJDFBJ45',
                'id_administrateur' => 1,
            ),
            1 => 
            array (
                'id_utilisateur' => 1001,
                'nom_utilisateur' => 'Atana',
                'prenom_utilisateur' => 'Nathan',
                'adresse_utilisateur' => 'Ouakam,Dakar',
                'email_utilisateur' => 'atananath@gmail.com',
                'telephone_utilisateur' => '+2217749548',
                'role_utilisateur' => 'Client',
                'mot_de_passe' => 'LHFELKG2',
                'id_administrateur' => 1,
            ),
            2 => 
            array (
                'id_utilisateur' => 1002,
                'nom_utilisateur' => 'Diallo',
                'prenom_utilisateur' => 'Mamacita',
                'adresse_utilisateur' => 'Foire,Dakar',
                'email_utilisateur' => 'diallo113@gmail.com',
                'telephone_utilisateur' => '+221785644493',
                'role_utilisateur' => 'Client',
                'mot_de_passe' => 'FDJGBRK7',
                'id_administrateur' => 2,
            ),
        ));
        
        
    }
}