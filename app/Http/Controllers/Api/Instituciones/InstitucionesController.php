<?php

namespace App\Http\Controllers\Api\Instituciones;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class InstitucionesController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $instituciones = DB::select("SELECT * FROM INSTITUCIONES");
    return json_encode($instituciones);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   */
  public function store()
  {

    try{
      $input = Input::all();
      $script = 'INSERT INTO INSTITUCIONES( nombre, codigo, direccion, telefono, email, contacto) VALUES (?,?,?,?,?,?)';
      DB::insert($script, [$input['nombre'], $input['codigo'], $input['direccion'], $input['telefono'], $input['email'], $input['contacto']]);
      return [$input['nombre'], $input['codigo'], $input['direccion'], $input['telefono'], $input['email'], $input['contacto']];
    }
    catch (\Exception $e) {
        return 'Error: '.  $e->getMessage(). "\n";
    }
  }

  /**
   * Display the specified resource.
   */
  public function show($id)
  {
    $institucion = DB::select("SELECT * FROM INSTITUCIONES WHERE id=". $id);
    return json_encode($institucion);

  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update($id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
      //
  }
}
