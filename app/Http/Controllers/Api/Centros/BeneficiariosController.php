<?php

namespace App\Http\Controllers\Api\Centros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class BeneficiariosController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index($id_centro)
  {
    $beneficiarios = DB::select("SELECT * FROM BENEFICIARIOS WHERE id_centro=".$id_centro);
    return json_encode($beneficiarios);
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

  }

  /**
   * Display the specified resource.
   */
  public function show($id)
  {
    $beneficiario = DB::select("SELECT * FROM BENEFICIARIOS WHERE id=". $id);
    return json_encode($beneficiario);

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
