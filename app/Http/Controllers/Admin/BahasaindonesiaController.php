<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bahasa_indonesia;
use Illuminate\Http\Request;

class BahasaindonesiaController extends Controller
{
    //
    public function bahasaView()
    {
        $allind = bahasa_indonesia::all();
        $data['allind'] = bahasa_indonesia::all();

        return view('backend.translate.view', $data);
    }
    public function bahasaAdd(){
        return view('backend.translate.add');
    }

    public function bahasaStore(Request $request){
        $data = new bahasa_indonesia();
        $data -> kata_ind=$request->kata_ind;
        // $data -> pasangan=$request->pasangan;
        $data -> save();

        return redirect()->route('backend.translate.view')->with('message','Data Berhasil Ditambahkan');
    }
    public function bahasaEdit($id){
        $editData = bahasa_indonesia::find($id);
         return view('backend.translate.edit', compact('editData'));
     }
 
 
     public function bahasaUpdate(Request $request, $id){
         $data = bahasa_indonesia::find($id);
         $data -> kata_ind=$request->kata_ind;
        //  $data -> pasangan=$request->pasangan;
       
 
         $data -> save();
 
         return redirect()->route('backend.translate.view')->with('message','Data Berhasil Dirubah');
     }
     public function bahasaDelete($id){
        $deleteData = bahasa_indonesia::find($id);
        $deleteData -> delete();
        
        return redirect()->route('backend.translate.view')->with('message','Data Berhasil Dihapus');
    }
    
}
