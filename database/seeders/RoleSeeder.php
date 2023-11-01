<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [ 
            ['name'=>"Admin", 'code'=>"admin"],
            ['name'=>"Superviseur", 'code'=>"superviseur"],
            ['name'=>"Usager", 'code'=>"usager"],
            ['name'=>"Agent de traitement", 'code'=>"agent-de-traitement"],
            ['name'=>"Agent de dépôt", 'code'=>"agent-de-depot"],
            ['name'=>"Agent de livraison", 'code'=>"agent-de-livraison"],
        ];
        foreach($roles as $item){
            $role = Role::where('name', $item["name"])->first();
            if(empty($role)){
                $role = new Role();
                
            }
            $role->code = $item["code"];
            $role->name = $item["name"];
            $role->save();
        }
    }
}
