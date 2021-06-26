<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\departamentos;

class DepartmentsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
		$departamentos = [
			[
				'dep_nombre' => 'DESARROLLO DE PROYECTOS',
				'dep_descripcion' => 'DESARROLLO DE PROYECTOS',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '02128584578',
				'dep_sec' => '02128584578',
				],
			[
				'dep_nombre' => 'PRESIDENCIA',
				'dep_descripcion' => 'PRESIDENCIA',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '00000000011',
				'dep_sec' => '00000000007',
			],
			[
				'dep_nombre' => 'DESPACHO DE LA PRESIDENCIA',
				'dep_descripcion' => 'DESPACHO DE LA PRESIDENCIA',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'ATENCION AL CIUDADANO',
				'dep_descripcion' => 'ATENCION AL CIUDADANO',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[	
				'dep_nombre' => 'ATENCION AL CIUDADANO (CPC)',
				'dep_descripcion' => 'ATENCION AL CIUDADANO (CPC)',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'GERENCIA DE TALENTO HUMANO',
				'dep_descripcion' => 'GERENCIA DE TALENTO HUMANO',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'GERENCIA DE TALENTO HUMANO JUBILADOS Y PENSIONADOS',
				'dep_descripcion' => 'GERENCIA DE TALENTO HUMANO JUBILADOS Y PENSIONADOS',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'AUDITORIA INTERNA',
				'dep_descripcion' => 'AUDITORIA INTERNA',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'CONSULTORIA JURIDICA',
				'dep_descripcion' => 'CONSULTORIA JURIDICA',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'SEGURIDAD INTEGRAL',
				'dep_descripcion' => 'SEGURIDAD INTEGRAL',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'FORMACION SOCIALISTA',
				'dep_descripcion' => 'FORMACION SOCIALISTA',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'DESARROLLO ESTRATEGICO Y COMUNICACIONAL',
				'dep_descripcion' => 'DESARROLLO ESTRATEGICO Y COMUNICACIONAL',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'VICEPRESIDENCIA DE GESTION INTERNA',
				'dep_descripcion' => 'VICEPRESIDENCIA DE GESTION INTERNA',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'PLANIFICACION PRESUPUESTO Y ORGANIZACION',
				'dep_descripcion' => 'PLANIFICACION PRESUPUESTO Y ORGANIZACION',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'ADMINISTRACION Y CONTABILIDAD',
				'dep_descripcion' => 'ADMINISTRACION Y CONTABILIDAD',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'SERVICIOS GENERALES',
				'dep_descripcion' => 'SERVICIOS GENERALES',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'MERCADEO Y ASUNTOS PUBLICOS',
				'dep_descripcion' => 'MERCADEO Y ASUNTOS PUBLICOS',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'FINANZAS',
				'dep_descripcion' => 'FINANZAS',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'VICEPRESIDENCIA DE GESTION PRODUCTIVA',
				'dep_descripcion' => 'VICEPRESIDENCIA DE GESTION PRODUCTIVA',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'SEDE ORIENTE (ANZOATEGUI)',
				'dep_descripcion' => 'SEDE ORIENTE (ANZOATEGUI)',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'SEDE LLANOS (APURE)',
				'dep_descripcion' => 'SEDE LLANOS (APURE)',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'SEDE ORINOCO (BOLIVAR)',
				'dep_descripcion' => 'SEDE ORINOCO (BOLIVAR)',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'SEDE CENTRO-OCCIDENTE (LARA)',
				'dep_descripcion' => 'SEDE CENTRO-OCCIDENTE (LARA)',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'SEDE ANDES (TACHIRA)',
				'dep_descripcion' => 'SEDE ANDES (TACHIRA)',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'SEDE OCCIDENTE (ZULIA)',
				'dep_descripcion' => 'SEDE OCCIDENTE (ZULIA)',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'PRODUCCION INTEGRAL',
				'dep_descripcion' => 'PRODUCCION INTEGRAL',
				'dep_codigo' => '0000-00-03-01-00',
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'PRODUCCION INTEGRAL (FICCION Y ANIMACION)',
				'dep_descripcion' => 'PRODUCCION INTEGRAL (FICCION Y ANIMACION)',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'PROGRAMACION',
				'dep_descripcion' => 'PROGRAMACION',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'PROGRAMACION',
				'dep_descripcion' => 'PROGRAMACION',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'PRODUCCION INDEPENDIENTE',
				'dep_descripcion' => 'PRODUCCION INDEPENDIENTE',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'COMUNICACION POPULAR',
				'dep_descripcion' => 'COMUNICACION POPULAR',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'IMAGEN Y PROMOCION',
				'dep_descripcion' => 'IMAGEN Y PROMOCION',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'VICEPRESIDENCIA DE GESTION PARA EL DES. TEC.',
				'dep_descripcion' => 'VICEPRESIDENCIA DE GESTION PARA EL DES. TEC.',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'GERENCIA DE TECNOLOGIA DE LA INFORMACION',
				'dep_descripcion' => 'GERENCIA DE TECNOLOGIA DE LA INFORMACION',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'GERENCIA DE INGENIERIA',
				'dep_descripcion' => 'GERENCIA DE INGENIERIA',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'TRANSPORTE',
				'dep_descripcion' => 'TRANSPORTE',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'SERVICIOS A LA PRODUCCION',
				'dep_descripcion' => 'SERVICIOS A LA PRODUCCION',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'SERVICIOS A LA PRODUCCION',
				'dep_descripcion' => 'SERVICIOS A LA PRODUCCION',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'GERENCIA DE OPERACIONES TECNICAS',
				'dep_descripcion' => 'GERENCIA DE OPERACIONES TECNICAS',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => '123 TV',
				'dep_descripcion' => '123 TV',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'CONSEJO DE CONTENIDO EDITORIAL',
				'dep_descripcion' => 'CONSEJO DE CONTENIDO EDITORIAL',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'VICEPRESIDENCIA DE GESTION DE OPERACIONES',
				'dep_descripcion' => 'VICEPRESIDENCIA DE GESTION DE OPERACIONES',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'GERENCIA DE COMUNICACIONES',
				'dep_descripcion' => 'GERENCIA DE COMUNICACIONES',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'SEGURIDAD INTEGRAL',
				'dep_descripcion' => 'SEGURIDAD INTEGRAL',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'GERENCIA DE POST PRODUCCION',
				'dep_descripcion' => 'GERENCIA DE POST PRODUCCION',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'VICEPRESIDENCIA DE GESTION DE OPERACIONES Y DESARROLLO TECNOLOGICO',
				'dep_descripcion' => 'VICEPRESIDENCIA DE GESTION DE OPERACIONES Y DESARROLLO TECNOLOGICO',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'SEDE ORIENTE (ANZOATEGUI)',
				'dep_descripcion' => 'SEDE ORIENTE (ANZOATEGUI)',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
			[
				'dep_nombre' => 'GERENCIA DE ADMINISTRACION Y CONTABILIDAD',
				'dep_descripcion' => 'GERENCIA DE ADMINISTRACION Y CONTABILIDAD',
				'dep_codigo' => $faker->ean13,
				'dep_tlf' => '000000001',
				'dep_sec' => '000000001', 
			],
		];
		foreach($departamentos as $departamento){
			departamentos::create($departamento);
		}

	   
	}
}
