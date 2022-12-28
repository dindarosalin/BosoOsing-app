<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class wisatasController extends Controller
{
    //
    public function wisatasview()
    {
        $allwisata = wisata::all();
        $data['allwisata'] = wisata::all();

        return view('backend.wisata.view', $data);
    }
    public function wisatasAdd()
    {

        return view('backend.wisata.add');
    }

    public function wisatasStore(Request $request)
    {
        // dd('test');
        $this->validate($request, [

            'nama_wisata'     => 'required',
            'lokasi'   => 'required',
            'outline'   => 'required',
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'artikel'   => 'required',
        ]);
        // dd($request);
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/images', $gambar->hashName());

        $data = wisata::create([

            'nama_wisata'     => $request->nama_wisata,
            'lokasi'   => $request->lokasi,
            'outline'     => $request->outline,
            'gambar'     => $gambar->hashName(),
            'artikel'   => $request->artikel,
        ]);
        // dd($gambar->hashName());
        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('backend.wisata.view')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('backend.wisata.view')->with(['error' => 'Data Gagal Disimpan!']);
        }
        // return redirect()->route('backend.wisata.view')->with('message','Data Berhasil Ditambahkan');
    }
    public function wisatasEdit($id)
    {
        $editData = wisata::find($id);
        return view('backend.wisata.edit', compact('editData'));
    }


    public function wisatasUpdate(Request $request, $id)
    {

        $data = wisata::findOrFail($id);
        if ($request->file('wisata') == '') {

            $data->update([
                'nama_wisata'     => $request->nama_wisata,
                'lokasi'   => $request->lokasi,
                'outline'     => $request->outline,
                'artikel'   => $request->artikel,
            ]);
        } else {

            //hapus old image
            Storage::disk('local')->delete('public/images/' . $data->gambar);

            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/images', $gambar->hashName());

            $data->update([
                'nama_wisata'     => $request->nama_wisata,
                'lokasi'   => $request->lokasi,
                'outline'     => $request->outline,
                'gambar'     => $gambar->hashName(),
                'artikel'   => $request->artikel,
            ]);
        }

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('backend.wisata.view')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('backend.wisata.view')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function wisatasDelete($id)
    {
        $deleteData = wisata::find($id);
        $deleteData->delete();

        return redirect()->route('backend.wisata.view')->with('message', 'Data Berhasil Dihapus');
    }
}
