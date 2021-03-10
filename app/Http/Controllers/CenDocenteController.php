<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CenDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Centre');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request->validate([
            'Denominacion'=>'required',
            'Codigo'=>'required',
            'CIF'=>'required',
            'Titularidad'=>'required',
            'Dir_postal'=>'required',
            'CP'=>'required', 
            'Director_nom'=>'required',
            'Director_apell'=>'required', 
            'Director_apell2'=>'required',   
            'Identificada'=>'required',
            'Tipo_identificada'=>'required',
        ]);

        DB::table('cen_docentes')->insert([
            "Denominacion" => $request->Denominacion,
            "Codigo" => $request->Codigo,
            "CIF" => $request->CIF,
            "Titularidad" => $request->Titularidad,
            "Dir_postal" => $request->Dir_postal,
            "CP" => $request->CP,
            "Director_nom" => $request->Director_nom,
            "Director_apell" => $request->Director_apell,
            "Director_apell2" => $request->Director_apell2,
            "Identificada" => $request->Identificada,
            "Tipo_identificada" => $request->Tipo_identificada
        ]);

        return $request;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
}
