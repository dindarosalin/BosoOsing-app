<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class kulinersController extends Controller
{
    //
    public function kulinersview()
    {
        $allkuliner = kuliner::all();
        $data['allkuliner'] = kuliner::all();
        //dd($data);
        return view('backend.kuliner.view', $data);
    }
    public function kulinersAdd(){
        return view('backend.kuliner.add');
    }

    public function kulinersStore(Request $request){
        // dd('test');
        $this->validate($request, [
            
            'nama_kuliner'     => 'required',
            'lokasi'   => 'required',
            'outline'   => 'required',
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'artikel'   => 'required'
        ]);
        // dd($request);
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/images', $gambar->hashName());

        $data = kuliner::create([
            
            'nama_kuliner'     => $request->nama_kuliner,
            'lokasi'   => $request->lokasi,
            'outline'     => $request->outline,
            'gambar'     => $gambar->hashName(),
            'artikel'   => $request->artikel,
        ]);
        // dd($gambar->hashName());
        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('backend.kuliner.view')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('backend.kuliner.view')->with(['error' => 'Data Gagal Disimpan!']);
        }
    // return redirect()->route('backend.kuliner.view')->with('message','Data Berhasil Ditambahkan');
    }
    public function kulinersEdit($id){
        $editData = kuliner::find($id);
         return view('backend.kuliner.edit', compact('editData'));
     }
 
 
     public function kulinersUpdate(Request $request, $id){
    
        $data = kuliner::findOrFail($id);
        if($request->file('kuliner') == '') {

            $data->update([
            'nama_kuliner'     => $request->nama_kuliner,
            'lokasi'   => $request->lokasi,
            'outline'     => $request->outline,
            'artikel'   => $request->artikel,
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/images/'.$data->gambar);
    
            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/images', $image->hashName());
    
            $data->update([
            'nama_kuliner'     => $request->nama_kuliner,
            'lokasi'   => $request->lokasi,
            'outline'     => $request->outline,
            'gambar'     => $gambar->hashName(),
            'artikel'   => $request->artikel,
            ]);
           
          }
         
        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('backend.kuliner.view')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
             return redirect()->route('backend.kuliner.view')->with(['error' => 'Data Gagal Diupdate!']);
         }

     }
     public function kulinersDelete($id){
        $deleteData = kuliner::find($id);
        $deleteData -> delete();
        
        return redirect()->route('backend.kuliner.view')->with('message','Data Berhasil Dihapus');
    }
}
