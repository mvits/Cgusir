<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*  DB::table('usuarios')->insert([
        'nombre'                => 'vits 2323sdrw',
        'numero_identificacion' => '524343522',
        'codigo_estudiantil'    => '20091015223',
        'correo'                => 'stivma@gmail.com',
        'password'              => 'salida',
        ]);*/

        $usuarios = factory(App\Usuario::class, 50)->create();
    }
}
