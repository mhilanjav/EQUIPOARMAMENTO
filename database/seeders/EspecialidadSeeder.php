<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especialidad;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Especialidad::create(["especialidad"=>"DEAP.",=>1,]);
        Especialidad::create(["especialidad"=>"DESP.",=>1,]);
        Especialidad::create(["especialidad"=>"DAP.",=>1,]);
        Especialidad::create(["especialidad"=>"DGP.",=>1,]);
        Especialidad::create(["especialidad"=>"MUS.",=>1,]);
    }
}
