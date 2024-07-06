<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Grado;
use App\Http\Requests\StorePersonalRequest;
use App\Http\Requests\UpdatePersonalRequest;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personals=Personal::where("estado",1)->get();
        //dd($personals);
        return view("personal.index",compact("personals"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grados=Grado::all();
        return view("personal.crear",compact("grados"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonalRequest $request)
    {




        //dd($request-> all());

        $personal=new Personal();
        $personal->grado_id= $request->grado;
        $personal->nombres= $request->nombres;
        $personal->apellidos= $request->apellidos;
        $personal->escalafon= $request->escalafon;
        $personal->estado=1;

        $personal->save();

        if ($request->hasFile("foto")) {
            $imagen = $request->file("foto");
            $nombreimagen = $personal->escalafon. "-" . $imagen->getClientOriginalName();
            $path = $imagen->storeAs("public/imgenes", $nombreimagen);
        }

        if (isset($data["photo"]) && $data["photo"] instanceof UploadedFile){
            $photo = $data["photo"];
            $photoPath = $photo->store("photo", "public");
        }

        return redirect()->route("personal.index");

        //$personal->nombre= $request->
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonalRequest $request, Personal $personal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personal $personal)
    {
        //
    }
}
