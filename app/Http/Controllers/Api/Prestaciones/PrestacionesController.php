<?php

namespace App\Http\Controllers\Api\Prestaciones;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PrestacionesController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $instituciones = DB::select("SELECT * FROM INSTITUCION");
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
      $script = 'INSERT INTO institucion( d_institucion, c_codigo_institucion) VALUES (?, ?, ?)';
      DB::insert($script, [$input['d_institucion'], $input['c_codigo_institucion']]);
      return [$input['d_institucion'], $input['c_codigo_institucion']];
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
    $institucion = DB::select("SELECT * FROM INSTITUCION WHERE id_institucion=". $id);
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
