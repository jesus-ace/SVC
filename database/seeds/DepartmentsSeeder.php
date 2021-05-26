<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'dep_nombre' => 'DESARROLLO DE PROYECTOS',
            'dep_descripcion' => 'DESARROLLO DE PROYECTOS',
            'dep_codigo' => '0000-00-04-02-00',
            'dep_tlf' => '02128584578',
            'dep_sec' => '02128584578',
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'PRESIDENCIA',
            'dep_descripcion' => 'PRESIDENCIA',
            'dep_codigo' => '0000-00-01-00-00',
            'dep_tlf' => '00000000011',
            'dep_sec' => '00000000007',
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'DESPACHO DE LA PRESIDENCIA',
            'dep_descripcion' => 'DESPACHO DE LA PRESIDENCIA',
            'dep_codigo' => '0000-00-01-01-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'ATENCION AL CIUDADANO',
            'dep_descripcion' => 'ATENCION AL CIUDADANO',
            'dep_codigo' => '0000-00-01-02-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'ATENCION AL CIUDADANO (CPC)',
            'dep_descripcion' => 'ATENCION AL CIUDADANO (CPC)',
            'dep_codigo' => '0000-00-01-02-01',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'GERENCIA DE TALENTO HUMANO',
            'dep_descripcion' => 'GERENCIA DE TALENTO HUMANO',
            'dep_codigo' => '0000-00-01-03-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'GERENCIA DE TALENTO HUMANO JUBILADOS Y PENSIONADOS',
            'dep_descripcion' => 'GERENCIA DE TALENTO HUMANO JUBILADOS Y PENSIONADOS',
            'dep_codigo' => '0000-00-01-03-01',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'AUDITORIA INTERNA',
            'dep_descripcion' => 'AUDITORIA INTERNA',
            'dep_codigo' => '0000-00-01-04-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'CONSULTORIA JURIDICA',
            'dep_descripcion' => 'CONSULTORIA JURIDICA',
            'dep_codigo' => '0000-00-01-05-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'SEGURIDAD INTEGRAL',
            'dep_descripcion' => 'SEGURIDAD INTEGRAL',
            'dep_codigo' => '0000-00-01-06-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'FORMACION SOCIALISTA',
            'dep_descripcion' => 'FORMACION SOCIALISTA',
            'dep_codigo' => '0000-00-01-07-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'DESARROLLO ESTRATEGICO Y COMUNICACIONAL',
            'dep_descripcion' => 'DESARROLLO ESTRATEGICO Y COMUNICACIONAL',
            'dep_codigo' => '0000-00-01-08-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'VICEPRESIDENCIA DE GESTION INTERNA',
            'dep_descripcion' => 'VICEPRESIDENCIA DE GESTION INTERNA',
            'dep_codigo' => '0000-00-02-00-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'PLANIFICACION PRESUPUESTO Y ORGANIZACION',
            'dep_descripcion' => 'PLANIFICACION PRESUPUESTO Y ORGANIZACION',
            'dep_codigo' => '0000-00-02-01-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'ADMINISTRACION Y CONTABILIDAD',
            'dep_descripcion' => 'ADMINISTRACION Y CONTABILIDAD',
            'dep_codigo' => '0000-00-02-02-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'SERVICIOS GENERALES',
            'dep_descripcion' => 'SERVICIOS GENERALES',
            'dep_codigo' => '0000-00-02-03-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'MERCADEO Y ASUNTOS PUBLICOS',
            'dep_descripcion' => 'MERCADEO Y ASUNTOS PUBLICOS',
            'dep_codigo' => '0000-00-02-04-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'FINANZAS',
            'dep_descripcion' => 'FINANZAS',
            'dep_codigo' => '0000-00-02-05-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'VICEPRESIDENCIA DE GESTION PRODUCTIVA',
            'dep_descripcion' => 'VICEPRESIDENCIA DE GESTION PRODUCTIVA',
            'dep_codigo' => '0000-00-03-00-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'SEDE ORIENTE (ANZOATEGUI)',
            'dep_descripcion' => 'SEDE ORIENTE (ANZOATEGUI)',
            'dep_codigo' => '0000-00-03-00-01',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'SEDE LLANOS (APURE)',
            'dep_descripcion' => 'SEDE LLANOS (APURE)',
            'dep_codigo' => '0000-00-03-00-02',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'SEDE ORINOCO (BOLIVAR)',
            'dep_descripcion' => 'SEDE ORINOCO (BOLIVAR)',
            'dep_codigo' => '0000-00-03-00-03',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'SEDE CENTRO-OCCIDENTE (LARA)',
            'dep_descripcion' => 'SEDE CENTRO-OCCIDENTE (LARA)',
            'dep_codigo' => '0000-00-03-00-04',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'SEDE ANDES (TACHIRA)',
            'dep_descripcion' => 'SEDE ANDES (TACHIRA)',
            'dep_codigo' => '0000-00-03-00-05',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'SEDE OCCIDENTE (ZULIA)',
            'dep_descripcion' => 'SEDE OCCIDENTE (ZULIA)',
            'dep_codigo' => '0000-00-03-00-06',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'PRODUCCION INTEGRAL',
            'dep_descripcion' => 'PRODUCCION INTEGRAL',
            'dep_codigo' => '0000-00-03-01-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'PRODUCCION INTEGRAL (FICCION Y ANIMACION)',
            'dep_descripcion' => 'PRODUCCION INTEGRAL (FICCION Y ANIMACION)',
            'dep_codigo' => '0000-00-03-01-01',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'PROGRAMACION',
            'dep_descripcion' => 'PROGRAMACION',
            'dep_codigo' => '0000-00-03-02-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'PROGRAMACION',
            'dep_descripcion' => 'PROGRAMACION',
            'dep_codigo' => '0000-00-03-02-01',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'PRODUCCION INDEPENDIENTE',
            'dep_descripcion' => 'PRODUCCION INDEPENDIENTE',
            'dep_codigo' => '0000-00-03-03-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'COMUNICACION POPULAR',
            'dep_descripcion' => 'COMUNICACION POPULAR',
            'dep_codigo' => '0000-00-03-04-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'IMAGEN Y PROMOCION',
            'dep_descripcion' => 'IMAGEN Y PROMOCION',
            'dep_codigo' => '0000-00-03-05-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'VICEPRESIDENCIA DE GESTION PARA EL DES. TEC.',
            'dep_descripcion' => 'VICEPRESIDENCIA DE GESTION PARA EL DES. TEC.',
            'dep_codigo' => '0000-00-04-00-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'GERENCIA DE TECNOLOGIA DE LA INFORMACION',
            'dep_descripcion' => 'GERENCIA DE TECNOLOGIA DE LA INFORMACION',
            'dep_codigo' => '0000-00-04-01-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'GERENCIA DE INGENIERIA',
            'dep_descripcion' => 'GERENCIA DE INGENIERIA',
            'dep_codigo' => '0000-00-04-01-01',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'TRANSPORTE',
            'dep_descripcion' => 'TRANSPORTE',
            'dep_codigo' => '0000-00-04-03-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'SERVICIOS A LA PRODUCCION',
            'dep_descripcion' => 'SERVICIOS A LA PRODUCCION',
            'dep_codigo' => '0000-00-04-04-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'SERVICIOS A LA PRODUCCION',
            'dep_descripcion' => 'SERVICIOS A LA PRODUCCION',
            'dep_codigo' => '0000-00-04-04-01',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'GERENCIA DE OPERACIONES TECNICAS',
            'dep_descripcion' => 'GERENCIA DE OPERACIONES TECNICAS',
            'dep_codigo' => '0000-00-04-05-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => '123 TV',
            'dep_descripcion' => '123 TV',
            'dep_codigo' => '0000-00-07-00-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'CONSEJO DE CONTENIDO EDITORIAL',
            'dep_descripcion' => 'CONSEJO DE CONTENIDO EDITORIAL',
            'dep_codigo' => '0000-00-30-00-11',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'VICEPRESIDENCIA DE GESTION DE OPERACIONES',
            'dep_descripcion' => 'VICEPRESIDENCIA DE GESTION DE OPERACIONES',
            'dep_codigo' => '0000-00-05-00-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'GERENCIA DE COMUNICACIONES',
            'dep_descripcion' => 'GERENCIA DE COMUNICACIONES',
            'dep_codigo' => '0000-00-05-01-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'SEGURIDAD INTEGRAL',
            'dep_descripcion' => 'SEGURIDAD INTEGRAL',
            'dep_codigo' => '0000-00-01-10-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'GERENCIA DE POST PRODUCCION',
            'dep_descripcion' => 'GERENCIA DE POST PRODUCCION',
            'dep_codigo' => '0000-00-06-00-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'VICEPRESIDENCIA DE GESTION DE OPERACIONES Y DESARROLLO TECNOLOGICO',
            'dep_descripcion' => 'VICEPRESIDENCIA DE GESTION DE OPERACIONES Y DESARROLLO TECNOLOGICO',
            'dep_codigo' => '0000-00-05-02-00',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'SEDE ORIENTE (ANZOATEGUI)',
            'dep_descripcion' => 'SEDE ORIENTE (ANZOATEGUI)',
            'dep_codigo' => '0000-00-30-00-01',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
        DB::table('departamentos')->insert([
            'dep_nombre' => 'GERENCIA DE ADMINISTRACION Y CONTABILIDAD',
            'dep_descripcion' => 'GERENCIA DE ADMINISTRACION Y CONTABILIDAD',
            'dep_codigo' => '0000-00-30-00-11',
            'dep_tlf' => '000000001',
            'dep_sec' => '000000001', 
        ]);
    }
}
