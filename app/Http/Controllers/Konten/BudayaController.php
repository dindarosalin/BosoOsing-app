<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use App\Models\Budaya;
use Illuminate\Http\Request;

class BudayaController extends Controller
{
    //
    public function budaya()
    {
        $allbdy = Budaya::all();
        $data['allbdy'] = Budaya::all();

        return view('konten.budaya.budaya', $data);
    }

    public function more($id_budaya){
        $allbdy = Budaya::where('id', $id_budaya)->get();

        return view('konten.budaya.more-budaya', compact('allbdy'));
    }
}
