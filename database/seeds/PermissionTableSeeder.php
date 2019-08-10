<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //permisos de los usuarios
        Permission::create([
            'name' => 'Listar usuarios',
            'slug' => 'users.index',
            'description' => 'Permite ver todos los usuarios del sistema.',
        ]);

        Permission::create([
            'name' => 'Crear usuarios',
            'slug' => 'users.create',
            'description' => 'Permite agregar usuarios al sistema.',
        ]);

        Permission::create([
            'name' => 'Ver detalles de los usuarios',
            'slug' => 'users.show',
            'description' => 'Ver detalles de todos los usuarios del sistema.',
        ]);

        Permission::create([
            'name' => 'Editar usuarios',
            'slug' => 'users.edit',
            'description' => 'Permite editar informacion de los usuarios del sistema.',
        ]);

        Permission::create([
            'name' => 'Eiminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'Permite eliminar usuarios del sistema.',
        ]);
        
        //permisos de los roles
        Permission::create([
            'name' => 'Listar roles',
            'slug' => 'roles.index',
            'description' => 'Permite ver todos los roles del sistema.',
        ]);

        Permission::create([
            'name' => 'Crear roles',
            'slug' => 'roles.create',
            'description' => 'Permite agregar roles al sistema.',
        ]);

        Permission::create([
            'name' => 'Ver detalles de los roles',
            'slug' => 'roles.show',
            'description' => 'Ver detalles de todos los roles del sistema.',
        ]);

        Permission::create([
            'name' => 'Editar roles',
            'slug' => 'roles.edit',
            'description' => 'Permite editar informacion de los roles del sistema.',
        ]);

        Permission::create([
            'name' => 'Eiminar roles',
            'slug' => 'roles.destroy',
            'description' => 'Permite eliminar roles del sistema.',
        ]);

        //permisos de los permisos
        Permission::create([
            'name' => 'Listar permisos',
            'slug' => 'permissions.index',
            'description' => 'Permite ver todos los permisos del sistema.',
        ]);

        Permission::create([
            'name' => 'Crear permisos',
            'slug' => 'permissions.create',
            'description' => 'Permite agregar permisos al sistema.',
        ]);

        Permission::create([
            'name' => 'Ver detalles de los permisos',
            'slug' => 'permissions.show',
            'description' => 'Ver detalles de todos los permisos del sistema.',
        ]);

        Permission::create([
            'name' => 'Editar permisos',
            'slug' => 'permissions.edit',
            'description' => 'Permite editar informacion de los permisos del sistema.',
        ]);

        Permission::create([
            'name' => 'Eiminar permisos',
            'slug' => 'permissions.destroy',
            'description' => 'Permite eliminar permisos del sistema.',
        ]);

        //permisos de los empresas
        Permission::create([
            'name' => 'Listar empresas',
            'slug' => 'companies.index',
            'description' => 'Permite ver todas las empresas del sistema.',
        ]);

        Permission::create([
            'name' => 'Crear empresas',
            'slug' => 'companies.create',
            'description' => 'Permite agregar empresas al sistema.',
        ]);

        Permission::create([
            'name' => 'Ver detalles de las empresas',
            'slug' => 'companies.show',
            'description' => 'Ver detalles de todas las empresas del sistema.',
        ]);

        Permission::create([
            'name' => 'Editar empresas',
            'slug' => 'companies.edit',
            'description' => 'Permite editar informacion de las empresas del sistema.',
        ]);

        Permission::create([
            'name' => 'Eiminar empresas',
            'slug' => 'companies.destroy',
            'description' => 'Permite eliminar empresas del sistema.',
        ]);
        
        //permisos de las dependencias
        Permission::create([
            'name' => 'Listar dependencias',
            'slug' => 'dependencies.index',
            'description' => 'Permite ver todas las dependencias del sistema.',
        ]);

        Permission::create([
            'name' => 'Crear dependencias',
            'slug' => 'dependencies.create',
            'description' => 'Permite agregar dependencias al sistema.',
        ]);

        Permission::create([
            'name' => 'Ver detalles de las dependencias',
            'slug' => 'dependencies.show',
            'description' => 'Ver detalles de todas las dependencias del sistema.',
        ]);

        Permission::create([
            'name' => 'Editar dependencias',
            'slug' => 'dependencies.edit',
            'description' => 'Permite editar informacion de las dependencias del sistema.',
        ]);

        Permission::create([
            'name' => 'Eiminar dependencias',
            'slug' => 'dependencies.destroy',
            'description' => 'Permite eliminar dependencias del sistema.',
        ]);

        //permisos de las subsubdependencias
        Permission::create([
            'name' => 'Listar subdependencias',
            'slug' => 'subdependencies.index',
            'description' => 'Permite ver todas las subdependencias del sistema.',
        ]);

        Permission::create([
            'name' => 'Crear subdependencias',
            'slug' => 'subdependencies.create',
            'description' => 'Permite agregar subdependencias al sistema.',
        ]);

        Permission::create([
            'name' => 'Ver detalles de las subdependencias',
            'slug' => 'subdependencies.show',
            'description' => 'Ver detalles de todas las subdependencias del sistema.',
        ]);

        Permission::create([
            'name' => 'Editar subdependencias',
            'slug' => 'subdependencies.edit',
            'description' => 'Permite editar informacion de las subdependencias del sistema.',
        ]);

        Permission::create([
            'name' => 'Eiminar subdependencias',
            'slug' => 'subdependencies.destroy',
            'description' => 'Permite eliminar subdependencias del sistema.',
        ]);

        //permisos de los documentos
        Permission::create([
            'name' => 'Listar documentos',
            'slug' => 'documents.index',
            'description' => 'Permite ver todos los documentos del sistema.',
        ]);

        Permission::create([
            'name' => 'Crear documentos',
            'slug' => 'documents.create',
            'description' => 'Permite agregar documentos al sistema.',
        ]);

        Permission::create([
            'name' => 'Ver detalles de las documentos',
            'slug' => 'documents.show',
            'description' => 'Ver detalles de todos los documentos del sistema.',
        ]);

        Permission::create([
            'name' => 'Editar documentos',
            'slug' => 'documents.edit',
            'description' => 'Permite editar informacion de los documentos del sistema.',
        ]);

        Permission::create([
            'name' => 'Eiminar documentos',
            'slug' => 'documents.destroy',
            'description' => 'Permite eliminar documentos del sistema.',
        ]);

        //permisos de los archivos
        Permission::create([
            'name' => 'Listar archivos',
            'slug' => 'files.index',
            'description' => 'Permite ver todos los archivos del sistema.',
        ]);

        Permission::create([
            'name' => 'Crear archivos',
            'slug' => 'files.create',
            'description' => 'Permite agregar archivos al sistema.',
        ]);

        Permission::create([
            'name' => 'Ver detalles de las archivos',
            'slug' => 'files.show',
            'description' => 'Ver detalles de todos los archivos del sistema.',
        ]);

        Permission::create([
            'name' => 'Editar archivos',
            'slug' => 'files.edit',
            'description' => 'Permite editar informacion de los archivos del sistema.',
        ]);

        Permission::create([
            'name' => 'Eiminar archivos',
            'slug' => 'files.destroy',
            'description' => 'Permite eliminar archivos del sistema.',
        ]);

        //permisos de las bodegas
        Permission::create([
            'name' => 'Listar bodegas',
            'slug' => 'cellars.index',
            'description' => 'Permite ver todas los bodegas del sistema.',
        ]);

        Permission::create([
            'name' => 'Crear bodegas',
            'slug' => 'cellars.create',
            'description' => 'Permite agregar bodegas al sistema.',
        ]);

        Permission::create([
            'name' => 'Ver detalles de las bodegas',
            'slug' => 'cellars.show',
            'description' => 'Ver detalles de todas los bodegas del sistema.',
        ]);

        Permission::create([
            'name' => 'Editar bodegas',
            'slug' => 'cellars.edit',
            'description' => 'Permite editar informacion de las bodegas del sistema.',
        ]);

        Permission::create([
            'name' => 'Eiminar bodegas',
            'slug' => 'cellars.destroy',
            'description' => 'Permite eliminar bodegas del sistema.',
        ]);

    }
}
