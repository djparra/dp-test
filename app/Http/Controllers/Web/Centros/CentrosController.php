<?php

namespace App\Http\Controllers\Web\Centros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CentrosController extends Controller
{

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('centros.create');
  }
}
