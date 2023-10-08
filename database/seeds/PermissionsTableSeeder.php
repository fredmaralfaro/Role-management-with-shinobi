<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //USERS
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Listar y navegar usuarios',
        ]);
        Permission::create([
            'name' => 'Ver detalle de usuario',
            'slug' => 'users.show',
            'description' => 'Ver detalle de cada usuario',
        ]);
        Permission::create([
            'name' => 'Edición de usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar datos de un usuario',
        ]);
        Permission::create([
            'name' => 'Eliminar usuario',
            'slug' => 'users.destroy',
            'description' => 'Eliminar un usuario',
        ]);

          //ROLES
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Listar y navegar roles',
        ]);
        Permission::create([
            'name' => 'Creación de roles',
            'slug' => 'roles.show',
            'description' => 'Crear roles',
        ]);
        Permission::create([
            'name' => 'Edición de roles',
            'slug' => 'roles.edit',
            'description' => 'Editar datos de un rol',
        ]);
        Permission::create([
            'name' => 'Eliminar roles',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar un rol',
        ]);

          //PRODUCTOS
        Permission::create([
            'name' => 'Navegar productos',
            'slug' => 'products.index',
            'description' => 'Listar y navegar productos',
        ]);
        Permission::create([
            'name' => 'Creación de productos',
            'slug' => 'products.show',
            'description' => 'Ver detalle de cada productos',
        ]);
        Permission::create([
            'name' => 'Edición de productos',
            'slug' => 'products.edit',
            'description' => 'Editar datos de un productos',
        ]);
        Permission::create([
            'name' => 'Eliminar productos',
            'slug' => 'products.destroy',
            'description' => 'Eliminar un productos',
        ]);
    }
}
