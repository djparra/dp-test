<?php

namespace App\Http\Controllers\Api\Beneficiarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class BeneficiariosController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $beneficiarios = DB::select("SELECT B.*, C.nombre centro, B.dp_calle || ' ' || B.dp_numero || ' ' || B.dp_piso domicilio FROM BENEFICIARIOS B, CENTROS C WHERE B.id_centro=C.id");
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

    try{
      $input = Input::all();
      $script = 'INSERT INTO BENEFICIARIOS(id_centro, id_titular, dp_nombre, dp_apellido, dp_ape_casada,
            dp_tipo_documento, dp_nro_documento, dp_cuit_cuil, dp_sexo, dp_f_nacimiento,
            dp_estado_civil, dp_nacionalidad, dp_calle, dp_numero, dp_piso,
            dp_cp, dp_localidad, dp_provincia, dp_pais) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

      DB::insert($script, [$input['id_centro'], $input['id_titular'], $input['dp_nombre'], $input['dp_apellido'],
        $input['dp_ape_casada'], $input['dp_tipo_documento'], $input['dp_nro_documento'], $input['dp_cuit_cuil'],
        $input['dp_sexo'], $input['dp_f_nacimiento'], $input['dp_estado_civil'], $input['dp_nacionalidad'],
        $input['dp_calle'], $input['dp_numero'], $input['dp_piso'], $input['dp_cp'],
        $input['dp_localidad'], $input['dp_provincia'], $input['dp_pais']]);

      return  [$input['id_centro'], $input['id_titular'], $input['dp_nombre'], $input['dp_apellido'],
        $input['dp_ape_casada'], $input['dp_tipo_documento'], $input['dp_nro_documento'], $input['dp_cuit_cuil'],
        $input['dp_sexo'], $input['dp_f_nacimiento'], $input['dp_estado_civil'], $input['dp_nacionalidad'],
        $input['dp_calle'], $input['dp_numero'], $input['dp_piso'], $input['dp_cp'],
        $input['dp_localidad'], $input['dp_provincia'], $input['dp_pais']];
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
    $beneficiario = DB::select("SELECT B.*, C.nombre centro FROM BENEFICIARIOS B, CENTROS C WHERE B.id_centro=C.id AND B.id=". $id);
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
