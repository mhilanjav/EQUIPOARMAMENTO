<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grado;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  GENERALES
        Grado::create(["grado"=>"Gral. Sup.","estado"=>1]);
        Grado::create(["grado"=>"Gral. My.","estado"=>1]);
        Grado::create(["grado"=>"Gral. 1ro.","estado"=>1]);
        // JEFES:
        Grado::create(["grado"=>"Cnl.","estado"=>1]);
        Grado::create(["grado"=>"Tcnl.","estado"=>1]);
        Grado::create(["grado"=>"My.","estado"=>1]);
        // OFICIALES:
        Grado::create(["grado"=>"Cap.","estado"=>1]);
        Grado::create(["grado"=>"Tte.","estado"=>1]);
        Grado::create(["grado"=>"Sbtte.","estado"=>1]);
        // SUBOFICIALES:
        Grado::create(["grado"=>"Sof. Sup.","estado"=>1]);
        Grado::create(["grado"=>"Sof. My.","estado"=>1]);
        Grado::create(["grado"=>"Sof. 1ro.","estado"=>1]);
        Grado::create(["grado"=>"Sof. 2do.","estado"=>1]);
        // SARGENTOS:
        Grado::create(["grado"=>"Sgto. My.","estado"=>1]);
        Grado::create(["grado"=>"Sgto. 1ro.","estado"=>1]);
        Grado::create(["grado"=>"Sgto. 2do.","estado"=>1]);
        Grado::create(["grado"=>"Sgto.","estado"=>1]);
        // JEFES DE SERVICIO:
        Grado::create(["grado"=>"Cnl. Serv.","estado"=>1]);
        Grado::create(["grado"=>"Tcnl. Serv.","estado"=>1]);
        Grado::create(["grado"=>"My. Serv.","estado"=>1]);
        //  OFICIALES:
        Grado::create(["grado"=>"Cap. Serv.","estado"=>1]);
        Grado::create(["grado"=>"Tte. Serv.","estado"=>1]);
        Grado::create(["grado"=>"Sbtte. Serv.","estado"=>1]);
        // SUBOFICIALES:
        Grado::create(["grado"=>"Sof. Sup. Serv.","estado"=>1]);
        Grado::create(["grado"=>"Sof. My. Serv.","estado"=>1]);
        Grado::create(["grado"=>"Sof. 1ro. Serv.","estado"=>1]);
        Grado::create(["grado"=>"Sof. 2do. Serv.","estado"=>1]);
        // SARGENTOS:
        Grado::create(["grado"=>"Sgto. My. Serv.","estado"=>1]);
        Grado::create(["grado"=>"Sgto. 1ro. Serv.","estado"=>1]);
        Grado::create(["grado"=>"Sgto. 2do. Serv.","estado"=>1]);
        Grado::create(["grado"=>"Sgto. Serv.","estado"=>1]);
    }
}
