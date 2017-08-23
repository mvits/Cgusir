<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //$this->call(UsuarioSeeder::class);
        //$this->call(AutorSeeder::class);
        $this->call(AreaConocimientoSeeder::class);
    }
}
