<?php

namespace Database\Seeders;

use App\Models\Civilite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiviliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $civilites = [ 
            [
                "name" => "Monsieur",
                "abbreviation" => "M."
            ],
            [
                "name" => "Madame",
                "abbreviation" => "Mme"
            ],
        ];
        foreach($civilites as $item){
            $civilite = Civilite::where('name', $item["name"])->first();
            if(empty($civilite)){
                $civilite = new Civilite();
                $civilite->name         = $item["name"];
                $civilite->abbreviation = $item["abbreviation"];
                $civilite->save();
            }
        }
    }
}
