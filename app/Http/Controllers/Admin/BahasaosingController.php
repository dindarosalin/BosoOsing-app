<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bahasa_osing;
use Illuminate\Http\Request;

class BahasaosingController extends Controller
{
    //
    public function osingView()
    {
        $allsg = bahasa_osing::all();
        $data['allsg'] = bahasa_osing::all();

        return view('backend.osing.view', $data);
    }
    public function osingAdd(){
        return view('backend.osing.add');
    }

    public function osingStore(Request $request){
        $data = new bahasa_osing();
        $data -> kata_os=$request->kata_os;
        // $data -> pasangan=$request->pasangan;
        $data -> save();

        return redirect()->route('backend.osing.view')->with('message','Data Berhasil Ditambahkan');
    }
    public function osingEdit($id){
        $editData = bahasa_osing::find($id);
         return view('backend.osing.edit', compact('editData'));
     }
 
 
     public function osingUpdate(Request $request, $id){
         $data = bahasa_osing::find($id);
         $data -> kata_os=$request->kata_os;
        //  $data -> pasangan=$request->pasangan;
       
 
         $data -> save();
 
         return redirect()->route('backend.osing.view')->with('message','Data Berhasil Dirubah');
     }
     public function osingDelete($id){
        $deleteData = bahasa_osing::find($id);
        $deleteData -> delete();
        
        return redirect()->route('backend.osing.view')->with('message','Data Berhasil Dihapus');
    }
}
