<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class marcaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertar registros a las tabla
        DB::table('marcas')->insert([
            [
                'nombre'=>'HP',
                'descripcion'=>'Hewlett-Packard, reconocida por sus laptops y computadoras de escritorio duraderas.',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'nombre'=>'Dell',
                'descripcion'=>'Marca destacada por equipos de alto rendimiento para negocios y gaming.',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'nombre'=>'	Lenovo',
                'descripcion'=>'Conocida por sus laptops ThinkPad y productos empresariales confiables.',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
            ]);

    }
}
