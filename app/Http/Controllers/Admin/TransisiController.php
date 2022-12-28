<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\transisi;
use Illuminate\Http\Request;

class TransisiController extends Controller
{
    //
    public function TransisiView()
    {
        $alltr = transisi::all();
        $data['alltr'] = transisi::all();

        return view('backend.transisi.view', $data);
    }
    public function TransisiAdd()
    {
        return view('backend.transisi.add');
    }

    public function TransisiStore(Request $request)
    {
        $data = new transisi();
        $data->bahasa_osing_id = $request->bahasa_osing_id;
        $data->bahasa_indonesia_id = $request->bahasa_indonesia_id;
        $data->save();

        return redirect()->route('backend.transisi.view')->with('message', 'Data Berhasil Ditambahkan');
    }
    public function TransisiEdit($id)
    {
        $editData = transisi::find($id);
        return view('backend.transisi.edit', compact('editData'));
    }


    public function TransisiUpdate(Request $request, $id)
    {
        $data = transisi::find($id);
        $data->bahasa_osing_id = $request->bahasa_osing_id;
        $data->bahasa_indonesia_id = $request->bahasa_indonesia_id;


        $data->save();

        return redirect()->route('backend.transisi.view')->with('message', 'Data Berhasil Dirubah');
    }
    public function TransisiDelete($id)
    {
        $deleteData = transisi::find($id);
        $deleteData->delete();

        return redirect()->route('backend.transisi.view')->with('message', 'Data Berhasil Dihapus');
    }
}
