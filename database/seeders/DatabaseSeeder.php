<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

 

    private $arrayDeUsuarios = array(
		array(

			'nickname' => 'usuarioHugo ', 
			'nombres' => 'Javier Andres', 
			'apellidos' => 'Mora Solano', 
			'email' => "dzam232f@gmail.com", 
			'password' => '23415rt21r21'
		),
		array(

			'nickname' => 'usuarioDaniel ', 
			'nombres' => 'Felipe Andres', 
			'apellidos' => 'Mora Ernesto', 
			'email' => "ss232@gmail.com", 
			'password' => '4211212123'
		)
        ,
		array(

			'nickname' => 'usuarioYuliana ', 
			'nombres' => 'Yuliana Andres', 
			'apellidos' => ' Perez Gonzales', 
			'email' => "faaaf@gmail.com", 
			'password' => '123123421'
		),
        
		array(

			'nickname' => 'usuarioSantiago', 
			'nombres' => 'Fernando Andres', 
			'apellidos' => 'Mora Chanfuelan', 
			'email' => "dsdas@gmail.com", 
			'password' => '123123122'
		),
		

	);
  
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        self::seedCatalog(); 

        $this->command->info('Tabla catálogo inicializada con datos!');
    }
    
      function seedCatalog()
    {
  
        // \App\Models\User::factory(10)->create();
        DB::table('usuarios')->delete();

        foreach( $this->arrayDeUsuarios as $usuario ) {
            $p = new Usuario();
      
            $p->nickname = $usuario['nickname'];

            $p->nombres = $usuario['nombres'];

            $p->apellidos = $usuario['apellidos'];

            $p->email = $usuario['email'];

            $p->password = $usuario['password'];


            $p->save();

      }
    }
}
