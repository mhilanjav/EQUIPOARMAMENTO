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
            "descripcion"=>"CHALECO ANTIBALA",
            "codigo"=>"SCZ001",
            "qr"=>"CDS-SAP-031-011",
            "estado"=>"EN BUEN ESTADO",
            "foto"=>"foto.jpg",
            "fechaalta"=>"2021-10-06",
            "personal_id" => 1,

        ]);
        Equipo::create([
            "descripcion"=>"CASCO ANTI MOTIN",
            "codigo"=>"SCZ011",
            "qr"=>"CDS-SAP-031-001",
            "estado"=>"EN BUEN ESTADO",
            "foto"=>"foto.jpg",
            "fechaalta"=>"2021-10-06",
            "personal_id" => 5,

        ]);
        Equipo::create([
            "descripcion"=>"CANILLERA(PAR)",
            "codigo"=>"SCZ021",
            "qr"=>"CDS-SAP-031-021",
            "estado"=>"EN BUEN ESTADO",
            "foto"=>"foto.jpg",
            "fechaalta"=>"2021-10-06",
            "personal_id" => 3,

        ]);
        Equipo::create([
            "descripcion"=>"BASTON POL.PR-24",
            "codigo"=>"SCZ031",
            "qr"=>"CDS-SAP-031-071",
            "estado"=>"EN BUEN ESTADO",
            "foto"=>"foto.jpg",
            "fechaalta"=> Carbon::now()->format("Y-m-d"),
            "personal_id" => 4,

        ]);
    }
}
