<?php

namespace Database\Seeders;

use App\Models\Pays;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pays = [
                "Afghanistan", "Afrique du Sud", "Albanie", "Algérie", "Allemagne", "Andorre", "Angola", "Anguilla", "Arabie Saoudite", "Argentine",
                 "Arménie", "Australie", "Autriche", "Azerbaidjan", "Bahamas", "Bangladesh", "Barbade", "Bahrein", "Belgique", "Bélize", "Bénin", "Biélorussie",
                  "Bolivie", "Botswana", "Bhoutan", "Boznie-Herzégovine", "Brésil", "Brunei", "Bulgarie", "Burkina Faso", "Burundi", "Cambodge", "Cameroun", "Canada", 
                  "Cap-Vert", "Chili", "Chine", "Chypre", "Colombie", "Comores", "République du Congo", "République Démocratique du Congo", "Cook", "Corée du Nord", 
                  "Corée du Sud", "Costa Rica", "Côte d’Ivoire", "Croatie", "Cuba", "Danemark", "Djibouti", "Dominique", "Egypte", "Emirats Arabes Unis", "Equateur", 
                  "Erythrée", "Espagne", "Estonie", "Etats-Unis d’Amérique", "Ethiopie", "Fidji", "Finlande", "France", "Gabon", "Gambie", "Géorgie", "Ghana", "Grèce", 
                  "Grenade", "Guatémala", "Guinée", "Guinée Bissau", "Guinée Equatoriale", "Guyana", "Haïti", "Honduras", "Hongrie", "Inde", "Indonésie", "Iran", "Iraq", 
                  "Irlande", "Islande", "Israël", "italie", "Jamaïque", "Japon", "Jordanie", "Kazakhstan", "Kenya", "Kirghizistan", "Kiribati", "Koweït", "Laos", "Lesotho",
                   "Lettonie", "Liban", "Liberia", "Liechtenstein", "Lituanie", "Luxembourg", "Lybie", "Macédoine", "Madagascar", "Malaisie", "Malawi", "Maldives", "Mali", 
                   "Malte", "Maroc", "Marshall", "Maurice", "Mauritanie", "Mexique", "Micronésie", "Moldavie", "Monaco", "Mongolie", "Mozambique", "Namibie", "Nauru", 
                   "Nepal", "Nicaragua", "Niger", "Nigéria", "Nioué", "Norvège", "Nouvelle Zélande", "Oman", "Ouganda", "Ouzbékistan", "Pakistan", "Palau", "Palestine", 
                   "Panama", "Papouasie Nouvelle Guinée", "Paraguay", "Pays-Bas", "Pérou", "Philippines", "Pologne", "Portugal", "Qatar", "République centrafricaine", 
                   "République Dominicaine", "République Tchèque", "Roumanie", "Royaume Uni", "Russie", "Rwanda", "Saint-Christophe-et-Niévès", "Sainte-Lucie", 
                   "Saint-Marin", "Saint-Vincent-et-les Grenadines", "Iles Salomon", "Salvador", "Samoa Occidentales", "Sao Tomé et Principe", "Sénégal", "Serbie",
                    "Seychelles", "Sierra Léone", "Singapour", "Slovaquie", "Slovénie", "Somalie", "Soudan", "Sri Lanka", "Suède", "Suisse", "Suriname", "Swaziland", 
                    "Syrie", "Tadjikistan", "Taiwan", "Tanzanie", "Tchad", "Thailande", "Timor Oriental", "Togo", "Tonga", "Trinité et Tobago", "Tunisie", "Turkménistan", 
                    "Turquie", "Tuvalu", "Ukraine", "Uruguay", "Vanuatu", "Vatican", "Vénézuela", "Vietnam", "Yemen", "Zambie", "Zimbabwe"];
        foreach($pays as $item){
            $pays = Pays::where('name', $item)->first();
            if(empty($pays)){
                $pays = new Pays();
                $pays->name         = $item;
                $pays->save();
            }
        }
    }
}
