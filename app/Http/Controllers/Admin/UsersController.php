<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function UserView() {
        // $allDataUser=User::all();
        $data['allDataUser']=User::all();
        return view('backend.user.view', $data);
    }

    public function UserAdd() {
        // $allDataUser=User::all();
        // $data['allDataUser']=User::all();
        return view('backend.user.add');
    }

    public function UserStore(Request $request) {
        $validatedData=$request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
            'phone_number' => 'required',
            
        ]);

        $data=new User();
        $data->type=$request->type;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->phone_number=$request->phone_number;
        $data->save();

        return redirect()->route('backend.user.view')->with('info', 'Tambah User berhasil');
    }
    public function UserEdit($id) {
        // dd('berhasil masuk ke controller edit');

        $editData= User::find($id);
        return view('backend.user.edit', compact('editData'));
    }

    public function UserUpdate(Request $request, $id) {
        $validatedData=$request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
            // 'phone_number' => 'required',
        ]);

        $data=User::find($id);
        $data->type=$request->type;
        $data->name=$request->name;
        $data->email=$request->email;
        //$data->password=bcrypt($request->password);
        $data->phone_number=$request->phone_number;
        $data->save();
// dd($data);
        return redirect()->route('backend.user.view')->with('info', 'Update User berhasil');
    }
    public function UserDelete($id){
        $deleteData = User::find($id);
        $deleteData -> delete();
        
        return redirect()->route('backend.user.view')->with('message','Data Berhasil Dihapus');
    }

}
