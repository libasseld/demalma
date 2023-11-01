<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\PermissionCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'Utilisateurs' => [
                'Ajouter Utilisateur',
                'Modifier Utilisateur',
                'Supprimer utilisateur',
            ],
            'Commandes' => [
                'Ajouter commande',
                'Valider commande'
            ]
        ];
        foreach ($permissions as $key => $items) {
            $permission_category = PermissionCategory::where('name', $key)->first();
            if(empty($permission_category)){
                $permission_category = new PermissionCategory();
                $permission_category->name = $key;
                $permission_category->save();
            }
            foreach ($items as $key => $item) {
                $permission = Permission::where('name', $item)->first();
                if(empty($permission)){
                    $permission = new Permission();

                }
                $permission->name = $item;
                $permission->code = Str::slug($item);
                $permission->permission_category_id = $permission_category->id;
                $permission->save();
            }
        }
    }
}
