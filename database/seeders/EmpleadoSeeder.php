<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Empleado;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empleado::create([
            'name' => 'José Arturo Loyola Balcázar',
            'puesto' => 'Jefe de USAE',
            'departamento' => 'Jefe de USAE',
            'email' => 'ja_loyola@seg.guanajuato.gob.mx',
            'ext' => '7279',
            'img' => 'arturo.png'
        ]);
        Empleado::create([
            'name' => 'Mónica Alejandra Rangel Villegas',
            'departamento' => '',
            'puesto' => 'Subjefa de Planeación y Control Escolar',
            'email' => 'ma_rangel@seg.guanajuato.gob.mx',
            'ext' => '7276',
            'img' => 'ale_rangel.png',
        ]);
        Empleado::create([
            'name' => 'José Julián Abarca Chávez',
            'departamento' => 'Informática y Mejora de Procesos',
            'puesto' => 'Subjefe de Informática y Mejora de Procesos',
            'email' => 'j_abarca@seg.guanajuato.gob.mx',
            'ext' => '7280',
            'img' => 'julian.png'
        ]);
        Empleado::create([
            'name' => 'Aránzazu Quintana Padilla',
            'departamento' => 'Servicios al Personal',
            'puesto' => 'Subjefa de Servicios al Personal',
            'email' => 'a_quintana.p@seg.guanajuato.gob.mx',
            'ext' => '7280',
            'img' => 'aranza.png'
        ]);
        Empleado::create([
            'name' => 'Arnulfo Ruiz Quintero',
            'departamento' => 'Servicios Materiales y Financieros',
            'puesto' => 'Subjefe de Servicios Materiales y Financieros',
            'email' => 'a_ruiz@seg.guanajuato.gob.mx',
            'ext' => '7277',
            'img' => 'arnulfo.png'
        ]);
        Empleado::create([
            'name' => 'Ines Carolina Herrera Briones',
            'departamento' => 'Servicios al Personal',
            'puesto' => 'Apoyo de Servicios al Personal',
            'email' => 'ic_herrera@seg.guanajuato.gob.mx',
            'ext' => '7275',
            'img' => 'caro.png'
        ]);
        Empleado::create([
            'name' => 'Alejandra Rojas Rangel',
            'departamento' => 'Departamento de Servicios Materiales y Financieros',
            'puesto' => 'Apoyo al Departamento de Servicios Materiales y Financieros',
            'email' => 'a_rojas@seg.guanajuato.gob.mx',
            'ext' => '7272',
            'img' => 'ale_rojas.png'
        ]);
        Empleado::create([
            'name' => 'Maria Delgado Medina',
            'departamento' => 'Departamento de Servicios al Personal',
            'puesto' => 'Apoyo al Departamento de Servicios al Personal',
            'email' => 'm_delgadom@seg.guanajuato.gob.mx',
            'ext' => '7282',
            'img' => 'mary.png'
        ]);
        Empleado::create([
            'name' => 'Mayra Dolores Munoz García',
            'departamento' => 'Departamento de Planeación y Control Escolar',
            'puesto' => 'Apoyo Departamento de Planeación y Control Escolar',
            'email' => 'md_munoz@seg.guanajuato.gob.mx',
            'ext' => '7281',
            'img' => 'mayra.png'
        ]);
        Empleado::create([
            'name' => 'Martin Enrique Torres Torres',
            'departamento' => 'Apoyo al Departamento de Servicios Materiales y Financieros',
            'puesto' => 'Apoyo al Departamento de Servicios Materiales y Financieros',
            'email' => 'me_torres.to@seg.guanajuato.gob.mx',
            'ext' => '7274',
            'img' => 'mayra.png'
        ]);
        Empleado::create([
            'name' => 'Ma. Juanita Martinez Cruz',
            'departamento' => ' ',
            'puesto' => 'Intendente',
            'email' => 'mj_martinezu@seg.guanajuato.gob.mx',
            'ext' => '7200',
            'img' => 'juanita.png'
        ]);
    }
}
