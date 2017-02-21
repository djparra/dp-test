<?php

namespace App\Http\Controllers\Api\Instituciones;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CentrosController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index($inst_id)
  {
    $centros = DB::select("SELECT * FROM CENTROS WHERE id_institucion=".$inst_id);
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
  public function store(AddCentroRequest $request, Institucion $institucion)
  {
    try{
      $input = Input::all();
      $script = 'INSERT INTO CENTROS( id_institucion, d_centro, c_codigo_centro) VALUES (?, ?, ?)';
      DB::insert($script, [$input['id_institucion'], $input['d_centro'], $input['c_codigo_centro']]);
      return [$input['id_institucion'], $input['d_centro'], $input['c_codigo_centro']];
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
