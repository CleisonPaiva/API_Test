<?php

namespace Database\Seeders;

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
//         \App\Models\User::factory(10)->create();

        //   -> php artisan db:seed
        // EXECUTA O QUE ESTIVER NA CLASSE DATABASESEEDER,PODENDO SER FACTORY OU SEED
        /**
         * Criando dados por Factory
         *
         * php artisan make:factory CompanyFactory cria a classe Factory
        **/
         \App\Models\Company::factory(20)->create();

        /**
         * Criando dados por Seed
         *
         *  php artisan make:seeder CompaniesTableSeeder cria a classe Seed
         **/
        $this->call(CompaniesTableSeeder::class);
    }
}
