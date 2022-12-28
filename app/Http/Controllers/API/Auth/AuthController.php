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
    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:25',
            'email' => 'email | required | unique:users',
            'password' => 'required | confirmed'
        ]);

        // create user
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->save();

        return response()->json($user, 201);
    }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'email | required',
            'password' => 'required'
        ]);

        $login_detail = request(['email', 'password']);

        if (!Auth::attempt($login_detail)) {
            return response()->json([
                'error' => 'login gagal. Cek lagi detail login'
            ], 401);
        }

        $user = $request->user();

        $tokenResult = $user->createToken('AccessToken');
        $token = $tokenResult->token;
        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_id' => $token->id,
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ], 200);
    }

    //BAHASA OSING
    public function createBahasaOsing(Request $request)
    {
        $bahasa_osing = new bahasa_osing();

        $bahasa_osing->kata_os = $request->input('kata_os');

        $bahasa_osing->save();
        return response()->json($bahasa_osing);
    }

    public function readBahasaOsing()
    {
        $bahasa_osing = bahasa_osing::all();
        return response()->json($bahasa_osing);
    }

    public function readbyIdBahasaOsing($id)
    {
        $bahasa_osing = bahasa_osing::find($id);
        return response()->json($bahasa_osing);
    }

    public function updateBahasaOsing(Request $request, $id)
    {
        $bahasa_osing = bahasa_osing::find($id);

        $bahasa_osing->kata_os = $request->input('kata_os');

        $bahasa_osing->save();
        return response()->json($bahasa_osing);
    }

    public function deletebyIdBahasaOsing(Request $request, $id)
    {
        $bahasa_osing = bahasa_osing::find($id);
        $bahasa_osing->delete();

        return response()->json($bahasa_osing);
    }

    //BAHASA INDONESIA
    public function createBahasaIndonesia(Request $request)
    {
        $bahasa_indonesia = new bahasa_indonesia();

        $bahasa_indonesia->kata_ind = $request->input('kata_ind');

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

        $bahasa_indonesia->kata_ind = $request->input('kata_ind');

        $bahasa_indonesia->save();
        return response()->json($bahasa_indonesia);
    }

    public function deletebyIdBahasaIndonesia(Request $request, $id)
    {
        $bahasa_indonesia = bahasa_indonesia::find($id);
        $bahasa_indonesia->delete();

        return response()->json($bahasa_indonesia);
    }

    //CONTENT BUDAYA

    //CONTENT KULINER
    

    //CONTENT WISATA
    public function createWisata(Request $request)
    {
        $wisata = new Wisata();

        $wisata->nama_wisata = $request->input('nama_wisata');
        $wisata->outline = $request->input('outline');
        $wisata->lokasi = $request->input('lokasi');
        $wisata->artikel = $request->input('artikel');
        $wisata->gambar = $request->input('gambar');

        $wisata->save();
        return response()->json($wisata);
    }

    public function readWisata()
    {
        $wisata = wisata::all();
        return response()->json($wisata);
    }

    public function readbyIdWisata($id)
    {
        $wisata = wisata::find($id);
        return response()->json($wisata);
    }

    public function updateWisata(Request $request, $id)
    {
        $wisata = wisata::find($id);

        $wisata->nama_wisata = $request->input('nama_wisata');
        $wisata->outline = $request->input('outline');
        $wisata->lokasi = $request->input('lokasi');
        $wisata->artikel = $request->input('artikel');
        $wisata->gambar = $request->input('gambar');

        $wisata->save();
        return response()->json($wisata);
    }

    public function deletebyIdWisata(Request $request, $id)
    {
        $wisata = wisata::find($id);
        $wisata->delete();

        return response()->json($wisata);
    }
}
