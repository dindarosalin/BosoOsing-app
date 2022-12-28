<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\User;
use App\Models\bahasa_osing;
use App\Models\bahasa_indonesia;
use App\Models\Wisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
  //BAHASA OSING
  public function createBahasaIndonesia(Request $request)
  {
    $bahasa_indonesia = new bahasa_indonesia();

    $bahasa_indonesia->kata_os = $request->input('kata_ind');

    $bahasa_indonesia->save();
    return response()->json($bahasa_indonesia);
  }

  public function readBahasaIndonesia()
  {
    $bahasa_indonesia = bahasa_indonesia::all();
    return response()->json($bahasa_indonesia);
  }

  public function readbyIdBahasaIndonesia($id)
  {
    $bahasa_indonesia = bahasa_indonesia::find($id);
    return response()->json($bahasa_indonesia);
  }

  public function updateBahasaIndonesia(Request $request, $id)
  {
    $bahasa_indonesia = bahasa_indonesia::find($id);

    $bahasa_indonesia->kata_os = $request->input('kata_ind');

    $bahasa_indonesia->save();
    return response()->json($bahasa_indonesia);
  }

  public function deletebyIdBahasaIndonesia(Request $request, $id)
  {
    $bahasa_indonesia = bahasa_indonesia::find($id);
    $bahasa_indonesia->delete();

    return response()->json($bahasa_indonesia);
  }
}
