<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Personal;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Personal::create([
            "escalafon"=>"13085-CB",
            "nombres"=>"Javier Mhilan",
            "apellidos"=>"Acho Acho",
            "grado_id"=>13,
        ]);
        Personal::create([
            "escalafon"=>"13086-PC",
            "nombres"=>"Marco Antonio",
            "apellidos"=>"Sardan Dias",
            "grado_id"=>19,
        ]);
        Personal::create([
            "escalafon"=>"13087-CB",
            "nombres"=>"Eliceo",
            "apellidos"=>"Arellano Huaylla",
            "grado_id"=>15,
        ]);
        Personal::create([
            "escalafon"=>"13088-CB",
            "nombres"=>"Carlos Tupac",
            "apellidos"=>"Torrez Zambrana",
            "grado_id"=>6,
        ]);
        Personal::create([
            "escalafon"=>"13089-CB",
            "nombres"=>"Alexnader",
            "apellidos"=>"Mendoza Artovar",
            "grado_id"=>16,
        ]);
        Personal::create([
            "escalafon"=>"13030-BF",
            "nombres"=>"Marianela ",
            "apellidos"=>"Barrido Aldunate",
            "grado_id"=>13,
        ]);
        Personal::create([
            "escalafon"=>"12585-OF",
            "nombres"=>"Jasmani",
            "apellidos"=>"Jaimes Terceros",
            "grado_id"=>8,
        ]);

    }
}
