<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //tabla habitaciones
            'ver-habitaciones',
            'crear-habitacion',
            'editar-habitacion',
            'borrar-habitacion',
            'ver-habitaciones-ocupadas',

            //tabla reservaciones
            'ver-reservaciones',
            'editar-reservaciones',
            'borrar-reservacion',

            //tabla check in
            'hacer-check_in',
            'hacer-check_out',

            //tabla usuarios
            'ver-usuarios',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
