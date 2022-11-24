<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(25)->create();
        \App\Models\Especialidade::factory(25)->create();
        \App\Models\Medico::factory(25)->create();
        \App\Models\Paciente::factory(25)->create();

        DB::table('users')->insert([
            'name'          => "Marcos Daniel",
            'email'         => "marcosdaniel.developer@hotmail.com",
            'created_at'    => date("Y-m-d H:i:s"),
            'updated_at'    => date("Y-m-d H:i:s"),
            'password'      => '$2a$12$bZPjvK2ne.jJHy8Al9EJgeIz/pY.cekq1Gh.SJivAoFfBNItcNrcG' //Hash::make('password'),
        ]);
    }
}
