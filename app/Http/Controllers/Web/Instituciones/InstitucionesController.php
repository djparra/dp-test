<?php

namespace App\Http\Controllers\Web\Instituciones;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class InstitucionesController extends Controller
{
  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //Log::info('ALTA DE INSTITUCION');
    return view('instituciones.create');
  }

  public function show($id_institucion)
  {
    $institucion = DB::select("SELECT * FROM INSTITUCIONES WHERE id_institucion=".$id_institucion);
    return view('instituciones.edit', json_encode($institucion));
  }
  public function update($id)
  {
    Log::info('Showing user profile for user: '.$id);
    return "UPD";
  }
}
