<?php

namespace App\Http\Controllers\Api\Centros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CentrosController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $centros = DB::select("SELECT C.*, I.nombre institucion FROM CENTROS C, INSTITUCIONES I WHERE C.id_institucion=I.id");
    return json_encode($centros);
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
      $script = 'INSERT INTO CENTROS( id_institucion, nombre, codigo, direccion, telefono, email, contacto) VALUES (?,?,?,?,?,?,?)';
      DB::insert($script, [$input['id_institucion'], $input['nombre'], $input['codigo'], $input['direccion'],
        $input['telefono'], $input['email'], $input['contacto']]);
      return [$input['id_institucion'], $input['nombre'], $input['codigo'], $input['direccion'],
        $input['telefono'], $input['email'], $input['contacto']];
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
    $centros = DB::select("SELECT * FROM CENTROS WHERE id=". $id);
    return json_encode($centros);

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
