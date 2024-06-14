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
        Grado::create(["grado"=>"Gral. Superior","estado"=>1]);
        Grado::create(["grado"=>"Gral. Mayor","estado"=>1]);
        Grado::create(["grado"=>"Gral. Primero","estado"=>1]);
        Grado::create(["grado"=>"Cnl. DESP.","estado"=>1]);
        Grado::create(["grado"=>"Tcnl. DEAP.","estado"=>1]);
        Grado::create(["grado"=>"My,","estado"=>1]);
        Grado::create(["grado"=>"Cap.","estado"=>1]);
        Grado::create(["grado"=>"Tte.","estado"=>1]);
        Grado::create(["grado"=>"Sbtte","estado"=>1]);
        Grado::create(["grado"=>"Cnl. DESP.","estado"=>1]);
        Grado::create(["grado"=>"Tcnl. DEAP.","estado"=>1]);
        Grado::create(["grado"=>"My,","estado"=>1]);
    }
}
