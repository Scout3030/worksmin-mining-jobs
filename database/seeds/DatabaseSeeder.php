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
            'province' => 'Sanchez Carrión'
            'slug' => 'sanchez-carrion'
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
