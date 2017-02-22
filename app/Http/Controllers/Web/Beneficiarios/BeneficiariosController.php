<?php

namespace App\Http\Controllers\Web\Beneficiarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class BeneficiariosController extends Controller
{
  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('beneficiarios.create');
  }

  public function edit($id_beneficiario)
  {

      $beneficiario = DB::select("SELECT B.*, C.nombre centro, B.dp_calle || ' ' || B.dp_numero || ' ' || B.dp_piso domicilio FROM BENEFICIARIOS B, CENTROS C
      WHERE B.id_centro=C.id AND B.id=" . $id_beneficiario);
//Log::info('EDICION BENE');
//Log::info(json_encode($beneficiario));
//dd(json_encode($beneficiario[0]));
      //return View::make('beneficiarios.edit_perfil1')->with('data', $beneficiario);
    //return view('beneficiarios.edit_perfil1');
    //return view('beneficiarios.edit_perfil1', compact($beneficiario));
    //return view('beneficiarios.edit_perfil1',  ['name' => 'James', 'ape' => 'Smith']);

      return view('beneficiarios.edit_perfil1')->with('data', $id_beneficiario);
//return view('beneficiarios.edit_perfil1', compact(data));
  }

  public function edit2()
  {

    return view('beneficiarios.edit_perfil2');
  }

  public function edit_detalle($id_beneficiario, $detalle)
  {

    if($detalle==1)
        return view('beneficiarios.edit_perfil1')->with('data', $id_beneficiario);
    else if($detalle==2)
        return view('beneficiarios.edit_perfil2')->with('data', $id_beneficiario);
    else if($detalle==3)
        return view('beneficiarios.edit_perfil3')->with('data', $id_beneficiario);
    else if($detalle==4)
        return view('beneficiarios.edit_perfil4')->with('data', $id_beneficiario);
    else if($detalle==5)
        return view('beneficiarios.edit_perfil5')->with('data', $id_beneficiario);
    else if($detalle==6)
        return view('beneficiarios.edit_perfil6')->with('data', $id_beneficiario);

  }

}
