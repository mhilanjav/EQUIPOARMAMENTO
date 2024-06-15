<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipo;
use Carbon\Carbon;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipo::create([
            "descripcion"=>"carco de piloto",
            "codigo"=>"EQ0054",
            "qr"=>"254125588",
            "estado"=>"regular",
            "foto"=>"foto.jpg",
            "fechaalta"=> Carbon::now()->format("Y-m-d"),
            "personal_id" => 5,

        ]);
        Equipo::create([
            "descripcion"=>"carco de piloto",
            "codigo"=>"EQ0054",
            "qr"=>"254125588",
            "estado"=>"regular",
            "foto"=>"foto.jpg",
            "fechaalta"=> Carbon::now()->format("Y-m-d"),
            "personal_id" => 5,

        ]);
        Equipo::create([
            "descripcion"=>"carco de piloto",
            "codigo"=>"EQ0054",
            "qr"=>"254125588",
            "estado"=>"regular",
            "foto"=>"foto.jpg",
            "fechaalta"=> Carbon::now()->format("Y-m-d"),
            "personal_id" => 5,

        ]);
        Equipo::create([
            "descripcion"=>"carco de piloto",
            "codigo"=>"EQ0054",
            "qr"=>"254125588",
            "estado"=>"regular",
            "foto"=>"foto.jpg",
            "fechaalta"=> Carbon::now()->format("Y-m-d"),
            "personal_id" => 5,

        ]);
    }
}
