<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Role::class, 1)->create(['name' => 'admin']);
        factory(App\Role::class, 1)->create(['name' => 'candidate']);
        factory(App\Role::class, 1)->create(['name' => 'company']);

        factory(App\Category::class, 1)->create([
            'category' => 'Ingeniería',
            'icon' => 'fa-briefcase',
            'slug' => 'ingenieria'
        ]);
        factory(App\Category::class, 1)->create([
            'category' => 'Mantenimiento/Mecánico',
            'icon' => 'fa-pencil-square-o',
            'slug' => 'mantenimiento-mecanico'
        ]);
        factory(App\Category::class, 1)->create([
            'category' => 'Producción Mina',
            'icon' => 'fa-cutlery',
            'slug' => 'produccion-mina'
        ]);
        factory(App\Category::class, 1)->create([
            'category' => 'Operadores de maquinaria',
            'icon' => 'fa-code',
            'slug' => 'operadores-de-maquinaria'
        ]);
        factory(App\Category::class, 1)->create([
            'category' => 'Supervisores',
            'icon' => 'fa-bar-chart',
            'slug' => 'supervisores'
        ]);
        factory(App\Category::class, 1)->create([
            'category' => 'Geología y Geociencias',
            'icon' => 'fa-pencil',
            'slug' => 'geologia-y-geociencias'
        ]);
        factory(App\Category::class, 1)->create([
            'category' => 'Ingeniería Ambiental',
            'icon' => 'fa-graduation-cap',
            'slug' => 'ingenieria-ambiental'
        ]);
        factory(App\Category::class, 1)->create([
            'category' => 'Gestión y Administración',
            'icon' => 'fa-bullhorn',
            'slug' => 'gestion-y-administracion'
        ]);
        factory(App\Category::class, 1)->create([
            'category' => 'Salud y Seguridad',
            'icon' => 'fa-briefcase',
            'slug' => 'salud-y-seguridad'
        ]);
        factory(App\Category::class, 1)->create([
            'category' => 'Topografía',
            'icon' => 'fa-pencil-square-o',
            'slug' => 'topografia'
        ]);

        factory(App\Sector::class, 10)->create();

        factory(App\Department::class, 1)->create([
            'department' => 'Amazonas',
            'slug' => 'amazonas'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Ancash',
            'slug' => 'ancash'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Apurimac',
            'slug' => 'apurimac'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Arequipa',
            'slug' => 'arequipa'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Ayacucho',
            'slug' => 'ayacucho'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Cajamarca',
            'slug' => 'cajamarca'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Callao',
            'slug' => 'callao'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Cusco',
            'slug' => 'cusco'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Huancavelica',
            'slug' => 'huancavelica'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Huanuco',
            'slug' => 'huanuco'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Ica',
            'slug' => 'ica'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Junin',
            'slug' => 'junin'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'La Libertad',
            'slug' => 'la-libertad'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Lambayeque',
            'slug' => 'lambayeque'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Lima',
            'slug' => 'lima'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Loreto',
            'slug' => 'loreto'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Madre De Dios',
            'slug' => 'madre-de-dios'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Moquegua',
            'slug' => 'moquegua'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Pasco',
            'slug' => 'pasco'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Piura',
            'slug' => 'piura'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Puno',
            'slug' => 'puno'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'San Martin',
            'slug' => 'san-martin'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Tacna',
            'slug' => 'tacna'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Tumbes',
            'slug' => 'tumbes'
        ]);
        factory(App\Department::class, 1)->create([
            'department' => 'Ucayali',
            'slug' => 'ucayali'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 1,
            'province' => 'Bagua',
            'slug' => 'bagua'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 1,
            'province' => 'Bongará',
            'slug' => 'bongara'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 1,
            'province' => 'Chachapoyas',
            'slug' => 'chachapoyas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 1,
            'province' => 'Condorcanqui',
            'slug' => 'condorcanqui'
        ]);
        factory(App\Province::class, 1)->create([
            'department_id' => 1,
            'province' => 'Luya',
            'slug' => 'luya'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 1,
            'province' => 'Rodríguez de Mendoza',
            'slug' => 'rodriguez-de-mendoza'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 1,
            'province' => 'Utcubamba',
            'slug' => 'utcubamba'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Aija',
            'slug' => 'aija'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Antonio Raymondi',
            'slug' => 'antonio-raymondi'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Asunción',
            'slug' => 'asuncion'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Bolognesi',
            'slug' => 'bolognesi'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Carhuaz',
            'slug' => 'carhuaz'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Carlos F Fitzcarrald',
            'slug' => 'carlos-f-fitzcarrald'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Casma',
            'slug' => 'casma'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Corongo',
            'slug' => 'corongo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Huaraz',
            'slug' => 'huaraz'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Huari',
            'slug' => 'huari'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Huarmey',
            'slug' => 'huarmey'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Huaylas',
            'slug' => 'huaylas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Mariscal-Luzuriaga',
            'slug' => 'mariscal-luzuriaga'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Ocros',
            'slug' => 'ocros'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Pallasca',
            'slug' => 'pallasca'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Pomabamba',
            'slug' => 'pomabamba'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Recuay',
            'slug' => 'recuay'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Santa',
            'slug' => 'santa'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Sihuas',
            'slug' => 'sihuas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 2,
            'province' => 'Yungay',
            'slug' => 'yungay'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 3,
            'province' => 'Abancay',
            'slug' => 'abancay'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 3,
            'province' => 'Andahuaylas',
            'slug' => 'andahuaylas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 3,
            'province' => 'Antabamba',
            'slug' => 'antabamba'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 3,
            'province' => 'Aymaraes',
            'slug' => 'aymaraes'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 3,
            'province' => 'Cotabambas',
            'slug' => 'cotabambas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 3,
            'province' => 'Chincheros',
            'slug' => 'chincheros'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 3,
            'province' => 'Grau',
            'slug' => 'grau'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 4,
            'province' => 'Arequipa',
            'slug' => 'arequipa'
        ]);


        factory(App\Province::class, 1)->create([
            'department_id' => 4,
            'province' => 'Camaná',
            'slug' => 'camana'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 4,
            'province' => 'Caravelí',
            'slug' => 'caraveli'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 4,
            'province' => 'Castilla',
            'slug' => 'castilla'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 4,
            'province' => 'Caylloma',
            'slug' => 'caylloma'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 4,
            'province' => 'Condesuyos',
            'slug' => 'condesuyos'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 4,
            'province' => 'Islay',
            'slug' => 'islay'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 4,
            'province' => 'La Unión',
            'slug' => 'la-union'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 5,
            'province' => 'Cangallo',
            'slug' => 'cangallo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 5,
            'province' => 'Huamanga',
            'slug' => 'huamanga'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 5,
            'province' => 'Huanca Sancos',
            'slug' => 'huanca-sancos'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 5,
            'province' => 'Huanta',
            'slug' => 'huanta'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 5,
            'province' => 'La Mar',
            'slug' => 'la-mar'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 5,
            'province' => 'Lucanas',
            'slug' => 'lucanas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 5,
            'province' => 'Parinacochas',
            'slug' => 'parinacochas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 5,
            'province' => 'Páucar del Sara Sara',
            'slug' => 'paucar-del-sara-sara'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 5,
            'province' => 'Sucre',
            'slug' => 'sucre'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 5,
            'province' => 'Victor Fajardo',
            'slug' => 'victor-fajardo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 5,
            'province' => 'Parinacochas',
            'slug' => 'parinacochas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 5,
            'province' => 'Vilcashuamán',
            'slug' => 'vilcashuaman'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'Cajamarca',
            'slug' => 'cajamarca'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'Cajabamba',
            'slug' => 'cajabamba'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'Celendín',
            'slug' => 'celendin'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'Chota',
            'slug' => 'chota'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'Contumazá',
            'slug' => 'contumaza'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'Cutervo',
            'slug' => 'cutervo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'Hualgayoc',
            'slug' => 'hualgayoc'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'Jaén',
            'slug' => 'jaen'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'San Ignacio',
            'slug' => 'san-ignacio'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'San Marcos',
            'slug' => 'san-marcos'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'San Miguel',
            'slug' => 'san-miguel'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'San Pablo',
            'slug' => 'san-pablo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 6,
            'province' => 'Santa Cruz',
            'slug' => 'santa-cruz'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 7,
            'province' => 'Callao',
            'slug' => 'callao'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'Acomayo',
            'slug' => 'acomayo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'Anta',
            'slug' => 'anta'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'Calca',
            'slug' => 'calca'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'Canas',
            'slug' => 'canas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'Canchis',
            'slug' => 'canchis'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'Chumbivilcas',
            'slug' => 'chumbivilcas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'Espinar',
            'slug' => 'espinar'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'Cuzco',
            'slug' => 'cuzco'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'La Convensión',
            'slug' => 'la-convension'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'Paruro',
            'slug' => 'paruro'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'Paucartambo',
            'slug' => 'paucartambo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'Quispicanchi',
            'slug' => 'quispicanchi'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 8,
            'province' => 'Urubamba',
            'slug' => 'urubamba'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 9,
            'province' => 'Acobamba',
            'slug' => 'acobamba'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 9,
            'province' => 'Angaraes',
            'slug' => 'angaraes'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 9,
            'province' => 'Castrovirreyna',
            'slug' => 'castrovirreyna'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 9,
            'province' => 'Churcampa',
            'slug' => 'churcampa'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 9,
            'province' => 'Huancavelica',
            'slug' => 'huancavelica'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 9,
            'province' => 'Huaytará',
            'slug' => 'huaytara'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 9,
            'province' => 'Tayacaja',
            'slug' => 'tayacaja'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 10,
            'province' => 'Ambo',
            'slug' => 'ambo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 10,
            'province' => 'Dos de Mayo',
            'slug' => 'dos-de-mayo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 10,
            'province' => 'Huancaybamba',
            'slug' => 'huancaybamba'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 10,
            'province' => 'Huamalíes',
            'slug' => 'huamalies'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 10,
            'province' => 'Huánuco',
            'slug' => 'huanuco'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 10,
            'province' => 'Lauricocha',
            'slug' => 'lauricocha'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 10,
            'province' => 'Leoncio Prado',
            'slug' => 'leoncio-prado'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 10,
            'province' => 'Marañón',
            'slug' => 'marañon'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 10,
            'province' => 'Pachitea',
            'slug' => 'pachitea'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 10,
            'province' => 'Puerto Inca',
            'slug' => 'puerto-inca'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 10,
            'province' => 'Yarowilca',
            'slug' => 'yarowilca'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 11,
            'province' => 'Chincha',
            'slug' => 'chincha'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 11,
            'province' => 'Ica',
            'slug' => 'ica'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 11,
            'province' => 'Nazca',
            'slug' => 'nazca'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 11,
            'province' => 'Palpa',
            'slug' => 'palpa'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 11,
            'province' => 'Pisco',
            'slug' => 'pisco'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 12,
            'province' => 'Chanchamayo',
            'slug' => 'chanchamayo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 12,
            'province' => 'Chupaca',
            'slug' => 'chupaca'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 12,
            'province' => 'Concepción',
            'slug' => 'concepcion'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 12,
            'province' => 'Huancayo',
            'slug' => 'huancayo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 12,
            'province' => 'Jauja',
            'slug' => 'jauja'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 12,
            'province' => 'Junín',
            'slug' => 'junin'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 12,
            'province' => 'Satipo',
            'slug' => 'satipo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 12,
            'province' => 'Tarma',
            'slug' => 'tarma'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 12,
            'province' => 'Yauli',
            'slug' => 'yauli'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 13,
            'province' => 'Ascope',
            'slug' => 'ascope'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 13,
            'province' => 'Bolivar',
            'slug' => 'bolivar'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 13,
            'province' => 'Chepén',
            'slug' => 'chepen'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 13,
            'province' => 'Gran Chimú',
            'slug' => 'gran-chimu'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 13,
            'province' => 'Julcán',
            'slug' => 'julcan'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 13,
            'province' => 'Otuzco',
            'slug' => 'otuzco'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 13,
            'province' => 'Pacasmayo',
            'slug' => 'pacasmayo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 13,
            'province' => 'Pataz',
            'slug' => 'pataz'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 13,
            'province' => 'Sánchez Carrión',
            'slug' => 'sanchez-carrion'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 13,
            'province' => 'Santiago de Chuco',
            'slug' => 'santiago-de-chuco'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 13,
            'province' => 'Trujillo',
            'slug' => 'trujillo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 13,
            'province' => 'Virú',
            'slug' => 'viru'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 14,
            'province' => 'Chiclayo',
            'slug' => 'chiclayo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 14,
            'province' => 'Ferreñafe',
            'slug' => 'ferrenafe'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 14,
            'province' => 'Lambayeque',
            'slug' => 'lambayeque'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 15,
            'province' => 'Barranca',
            'slug' => 'barranca'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 15,
            'province' => 'Cajatambo',
            'slug' => 'cajatambo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 15,
            'province' => 'Cañete',
            'slug' => 'canete'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 15,
            'province' => 'Canta',
            'slug' => 'canta'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 15,
            'province' => 'Huaral',
            'slug' => 'huaral'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 15,
            'province' => 'Huarochiri',
            'slug' => 'huarochiri'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 15,
            'province' => 'Huaura',
            'slug' => 'huaura'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 15,
            'province' => 'Lima',
            'slug' => 'lima'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 15,
            'province' => 'Oyón',
            'slug' => 'oyon'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 15,
            'province' => 'Yauyos',
            'slug' => 'yauyos'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 16,
            'province' => 'Alto Amazonas',
            'slug' => 'alto-amazonas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 16,
            'province' => 'Datem del Marañón',
            'slug' => 'datem-del-marañón'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 16,
            'province' => 'Loreto',
            'slug' => 'loreto'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 16,
            'province' => 'Mariscal Ramón Castilla',
            'slug' => 'mariscal-ramon-castilla'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 16,
            'province' => 'Maynas',
            'slug' => 'maynas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 16,
            'province' => 'Putumayo',
            'slug' => 'putumayo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 16,
            'province' => 'Requena',
            'slug' => 'requena'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 16,
            'province' => 'Ucayali',
            'slug' => 'ucayali'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 17,
            'province' => 'Manu',
            'slug' => 'manu'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 17,
            'province' => 'Tahuamanu',
            'slug' => 'tahuamanu'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 17,
            'province' => 'Tambopata',
            'slug' => 'tambopata'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 18,
            'province' => 'General Sánchez Cerro',
            'slug' => 'general-sanchez-cerro'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 18,
            'province' => 'Ilo',
            'slug' => 'ilo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 18,
            'province' => 'Mariscal Nieto',
            'slug' => 'mariscal-nieto'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 19,
            'province' => 'Daniel A. Carrión',
            'slug' => 'daniel-a-carrion'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 19,
            'province' => 'Oxapampa',
            'slug' => 'oxapampa'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 19,
            'province' => 'Pasco',
            'slug' => 'pasco'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 20,
            'province' => 'Ayabaca',
            'slug' => 'ayabaca'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 20,
            'province' => 'Huancabamba',
            'slug' => 'huancabamba'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 20,
            'province' => 'Morropón',
            'slug' => 'morropon'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 20,
            'province' => 'Paita',
            'slug' => 'paita'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 20,
            'province' => 'Piura',
            'slug' => 'piura'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 20,
            'province' => 'Sechura',
            'slug' => 'sechura'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 20,
            'province' => 'Sullana',
            'slug' => 'sullana'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 20,
            'province' => 'Talara',
            'slug' => 'talara'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'Azángaro',
            'slug' => 'azangaro'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'Carabaya',
            'slug' => 'carabaya'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'Chucuito',
            'slug' => 'chucuito'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'El Collao',
            'slug' => 'el-collao'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'Huancané',
            'slug' => 'huancane'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'Lampa',
            'slug' => 'lampa'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'Melgar',
            'slug' => 'melgar'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'Moho',
            'slug' => 'moho'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'Puno',
            'slug' => 'puno'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'San Antonio de Putina',
            'slug' => 'san-antonio-de-putina'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'San Román',
            'slug' => 'san-roman'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'Sandia',
            'slug' => 'sandia'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 21,
            'province' => 'Yunguyo',
            'slug' => 'yunguyo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 22,
            'province' => 'Bellavista',
            'slug' => 'bellavista'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 22,
            'province' => 'El Dorado',
            'slug' => 'el-dorado'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 22,
            'province' => 'Huallaga',
            'slug' => 'huallaga'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 22,
            'province' => 'Lamas',
            'slug' => 'lamas'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 22,
            'province' => 'Mariscal Cáceres',
            'slug' => 'mariscal-caceres'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 22,
            'province' => 'Moyobamba',
            'slug' => 'moyobamba'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 22,
            'province' => 'Picota',
            'slug' => 'picota'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 22,
            'province' => 'Rioja',
            'slug' => 'rioja'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 22,
            'province' => 'San Martín',
            'slug' => 'san-martin'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 23,
            'province' => 'Tocache',
            'slug' => 'tocache'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 23,
            'province' => 'Candarave',
            'slug' => 'candarave'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 23,
            'province' => 'Jorge Basadre',
            'slug' => 'jorge-basadre'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 23,
            'province' => 'Tacna',
            'slug' => 'tacna'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 23,
            'province' => 'Tarata',
            'slug' => 'tarata'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 24,
            'province' => 'Tumbes',
            'slug' => 'tumbes'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 24,
            'province' => 'Zarumilla',
            'slug' => 'zarumilla'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 24,
            'province' => 'Contralmirante Villar',
            'slug' => 'contralmirante-villar'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 25,
            'province' => 'Atalaya',
            'slug' => 'atalaya'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 25,
            'province' => 'Coronel Portillo',
            'slug' => 'coronel-portillo'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 25,
            'province' => 'Padre Abad',
            'slug' => 'padre-abad'
        ]);

        factory(App\Province::class, 1)->create([
            'department_id' => 25,
            'province' => 'Purús',
            'slug' => 'purus'
        ]);

        factory(App\Skill::class, 20)->create();

        factory(App\Language::class, 1)->create(['language' => 'español']);
        factory(App\Language::class, 1)->create(['language' => 'inglès']);
        factory(App\Language::class, 1)->create(['language' => 'francès']);

        factory(App\Subcategory::class, 1)->create([
            'category_id' => 3,
            'subcategory' => 'Supervisor Mina',
            'slug' => 'supervisor-mina'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 2,
            'subcategory' => 'Superintendente de Mantenimiento',
            'slug' => 'superintendente-de-mantenimiento'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 6,
            'subcategory' => 'Geólogo Senior',
            'slug' => 'geologo-senior'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 7,
            'subcategory' => 'Ingeniero de medio ambiente',
            'slug' => 'ingeniero-de-medio-ambiente'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 9,
            'subcategory' => 'Ingeniero de seguridad',
            'slug' => 'ingeniero-de-seguridad'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 8,
            'subcategory' => 'Administrador mina',
            'slug' => 'administrador-mina'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 8,
            'subcategory' => 'Jefe de logística',
            'slug' => 'jefe-de-logistica'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 7,
            'subcategory' => 'Auxiliar de medio ambiente',
            'slug' => 'auxiliar-de-medio-ambiente'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 7,
            'subcategory' => 'Superintendente de Ambiente',
            'slug' => 'superintendente-de-ambiente'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 8,
            'subcategory' => 'Almacén',
            'slug' => 'almacen'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 5,
            'subcategory' => 'Supervisor de Operaciones',
            'slug' => 'supervisor-de-operaciones'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 2,
            'subcategory' => 'Jefe de Mantenimiento',
            'slug' => 'jefe-de-mantenimiento'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 4,
            'subcategory' => 'Operadores equipos de producción',
            'slug' => 'operadores-equipos-de-produccion'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 5,
            'subcategory' => 'Supervisor de planta',
            'slug' => 'supervisor-de-planta'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 10,
            'subcategory' => 'Topógrafos',
            'slug' => 'topografos'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 6,
            'subcategory' => 'Geólogo de exploraciones',
            'slug' => 'geologo-de-exploraciones'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 4,
            'subcategory' => 'Operadores equipos auxiliares',
            'slug' => 'operadores-equipos-auxiliares'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 10,
            'subcategory' => 'Ingeniero Geodésico',
            'slug' => 'ingeniero-geodesico'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 6,
            'subcategory' => 'Geólogo de Control',
            'slug' => 'geologo-de-control'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 7,
            'subcategory' => 'Gerente ambiental',
            'slug' => 'gerente-ambiental'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 4,
            'subcategory' => 'Operadores múltiples',
            'slug' => 'operadores-multiples'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 2,
            'subcategory' => 'Mecánicos',
            'slug' => 'mecanicos'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 2,
            'subcategory' => 'Soldadores',
            'slug' => 'soldadores'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 2,
            'subcategory' => 'Electricistas',
            'slug' => 'electricistas'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 1,
            'subcategory' => 'Ingeniero senior de minería',
            'slug' => 'ingeniero-senior-de-mineria'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 3,
            'subcategory' => 'Maestros Perforistas',
            'slug' => 'maestros-perforistas'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 5,
            'subcategory' => 'Supervisor de servicios auxiliares',
            'slug' => 'supervisor-de-servicios-auxiliares'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 3,
            'subcategory' => 'Ayudantes Perforistas',
            'slug' => 'ayudantes-perforistas'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 2,
            'subcategory' => 'Ayudantes Mecánicos',
            'slug' => 'ayudantes-mecanicos'
        ]);
        factory(App\Subcategory::class, 1)->create([
            'category_id' => 1,
            'subcategory' => 'Superintendente de Operaciones',
            'slug' => 'superintendente-de-operaciones'
        ]);

        factory(App\JobType::class, 1)->create(['job_type' => 'Medio tiempo']);
        factory(App\JobType::class, 1)->create(['job_type' => 'Tiempo completo']);
        factory(App\JobType::class, 1)->create(['job_type' => 'Por horas']);


        Storage::deleteDirectory('users');
        Storage::makeDirectory('users');

        factory(App\User::class, 1)->create([
            'email' => 'admin@mail.com',
            'password' => bcrypt('secret'),
            'role_id' => App\Role::ADMIN,
        ])
        ->each(function(App\User $u){
            factory(App\Candidate::class, 1)->create(['user_id' => $u->id, 'name' => $u->name]); 
        });

        factory(App\User::class, 1)->create([
            'email' => 'candidate@mail.com',
            'password' => bcrypt('secret'),
            'role_id' => App\Role::CANDIDATE,
        ])
        ->each(function(App\User $u){
            factory(App\Candidate::class, 1)->create(['user_id' => $u->id, 'name' => $u->name]); 
        });

        // factory(App\User::class, 20)->create()
        // ->each(function(App\User $u){
        //     factory(App\Candidate::class, 1)->create(['user_id' => $u->id, 'name' => $u->name]); 
        // });

        factory(App\User::class, 1)->create([
            'email' => 'company@mail.com',
            'password' => bcrypt('secret'),
            'role_id' => App\Role::COMPANY,
        ])
        ->each(function(App\User $u){
            factory(App\Company::class, 1)->create(['user_id' => $u->id, 'title' => $u->name]); 
        });

        // factory(App\User::class, 10)->create([
        //     'role_id' => App\Role::COMPANY,
        // ])
        // ->each(function(App\User $u){
        //     factory(App\Company::class, 1)->create(['user_id' => $u->id, 'title' => $u->name]);  
        // });

        // factory(App\Job::class, 100)->create();

        // factory(App\Education::class, 60)->create();
        // factory(App\WorkExperience::class, 70)->create();

        Storage::deleteDirectory('files');
        Storage::makeDirectory('files');
    }
}
