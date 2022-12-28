<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Budaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class budayasController extends Controller
{
    //
    public function budayasview()
    {
        $allbudaya = budaya::all();
        $data['allbudaya'] = budaya::all();

        return view('backend.budaya.view', $data);
    }
    public function budayasAdd(){
        return view('backend.budaya.add');
    }

    public function budayasStore(Request $request){
        $this->validate($request, [
            
            'nama_budaya'     => 'required',
            'lokasi'   => 'required',
            'outline'   => 'required',
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'artikel'   => 'required',
        ]);
        // dd($request);
        $img = $request->file('gambar');
        $img->storeAs('public/images', $img->hashName());

        $data = budaya::create([
            
            'nama_budaya'     => $request->nama_budaya,
            'lokasi'   => $request->lokasi,
            'outline'     => $request->outline,
            'gambar'     => $img->hashName(),
            'artikel'   => $request->artikel,
        ]);
        // dd($img->hashName());
        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('backend.budaya.view')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('backend.budaya.view')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function budayasEdit($id){
        $editData = budaya::find($id);
         return view('backend.budaya.edit', compact('editData'));
     }
 
 
     public function budayasUpdate(Request $request, $id){
         $data = budaya::find($id);
         $data -> nama_budaya=$request->nama_budaya;
         $data -> lokasi=$request->lokasi;
         $data -> outline=$request->outline;
         $data -> gambar=$request->gambar;
         $data -> artikel=$request->artikel;
 
         $data -> save();
 
         return redirect()->route('backend.budaya.view')->with('message','Data Berhasil Dirubah');
     }
     public function budayasDelete($id){
        $deleteData = budaya::find($id);
        $deleteData -> delete();
        
        return redirect()->route('backend.budaya.view')->with('message','Data Berhasil Dihapus');
    }
}
