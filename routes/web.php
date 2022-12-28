<?php
//for user member or admin
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UserController;
//for user view 
use App\Http\Controllers\Konten\BudayaController;
use App\Http\Controllers\Konten\KulinerController;
use App\Http\Controllers\Konten\WisataController;
//for admin crud
use App\Http\Controllers\admin\KulinersController;
use App\Http\Controllers\admin\BudayasController;
use App\Http\Controllers\admin\WisatasController;
use App\Http\Controllers\admin\TransisiController;
use App\Http\Controllers\admin\BahasaindonesiaController;
use App\Http\Controllers\admin\BahasaosingController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\Backend\BahasaController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//===========================================ROUTE LOGIN==================================================

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [BahasaController::class, 'proses'], ['status']);
Route::get('translate', [BahasaController::class, 'index'], ['status'])->name('translate');

Route::get('user/register', [UserController::class, 'register']);
Route::get('user/login', [UserController::class, 'login']);
Route::get('user/registration-success', [UserController::class, 'regi']);


Route::group(['prefix' => 'user/'], function () {
    Route::get("register", [UserController::class, "register"]);
    Route::post("process-register", [UserController::class, "processRegister"]);
    Route::get("register-success/{id}", [UserController::class, "registerSuccess"]);

    //materi minggu depan
    Route::get("login", [UserController::class, "login"])->name("login");
    Route::post("process-login", [UserController::class, "processLogin"]);
    Route::get("process-logout", [UserController::class, "processLogout"]);

    // Proses Verifikasi email
    Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verify'])
        ->middleware(['throttle:6,1']) // 6 eksekusi per IP setiap 1 menit
        ->name('verification.verify');

    // Resend New Verification Email
    Route::get('/email/verification/{id}', function ($id) {
        $user = User::where("id", $id)->first();

        $user->sendEmailVerificationNotification();

        return redirect("user/register-success/$id")->withSuccess("Link berhasil di kirim kan kembali!");
    })->middleware(['throttle:6,1'])->name('verification.send');
});

//ADMIN

Route::get('/dashboard', [MemberController::class, 'dashboard'])->middleware(['auth', 'check-access:0']);
Route::get('/dashboard/admin', [MemberController::class, 'admin'])->middleware(['auth', 'check-access:1']);


Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

//===========================================ROUTE KONTEN==================================================

//ROUTE KE WISATA
Route::get('/wisata', [WisataController::class, 'wisata'])->name('wisata');
Route::get('/wisata/more/{id}', [WisataController::class, 'more'])->name('more.wisata');

// ROUTE KE BUDAYA
Route::get('/budaya', [BudayaController::class, 'Budaya'])->name('budaya');
Route::get('/budaya/more/{id}', [BudayaController::class, 'more'])->name('more.budaya');

// ROUTE KE KULINER
Route::get('/kuliner', [KulinerController::class, 'kuliner'])->name('kuliner');
Route::get('/kuliner/more/{id}', [KulinerController::class, 'more'])->name('more.kuliner');


//===========================================ROUTE CRUD FOR ADMIN =========================================

//CURD KULINER
Route::prefix('kuliners')->group(function () {
    Route::get('/view', [KulinersController::class, 'kulinersView'])->name('backend.kuliner.view');
    Route::get('/add', [KulinersController::class, 'kulinersAdd'])->name('backend.kuliner.add');
    Route::post('/store', [KulinersController::class, 'kulinersStore'])->name('kuliners.store');
    Route::get('/edit/{id}', [KulinersController::class, 'kulinersEdit'])->name('kuliners.Edit');
    Route::post('/update/{id}', [KulinersController::class, 'kulinersUpdate'])->name('kuliners.Update');
    Route::get('/delete/{id}', [KulinersController::class, 'kulinersDelete'])->name('kuliners.delete');
});

//CRUD WISATA
Route::prefix('Wisatas')->group(function () {
    Route::get('/view', [WisatasController::class, 'wisatasView'])->name('backend.wisata.view');
    Route::get('/add', [WisatasController::class, 'wisatasAdd'])->name('backend.wisata.add');
    Route::post('/store', [WisatasController::class, 'wisatasStore'])->name('wisatas.store');
    Route::get('/edit/{id}', [WisatasController::class, 'wisatasEdit'])->name('wisatas.Edit');
    Route::post('/update/{id}', [WisatasController::class, 'wisatasUpdate'])->name('wisatas.Update');
    Route::get('/delete/{id}', [WisatasController::class, 'wisatasDelete'])->name('wisatas.delete');
});
//CRUD BUDAYA 
Route::prefix('Budayas')->group(function () {
    Route::get('/view', [BudayasController::class, 'budayasView'])->name('backend.budaya.view');
    Route::get('/add', [BudayasController::class, 'budayasAdd'])->name('backend.budaya.add');
    Route::post('/store', [BudayasController::class, 'budayasStore'])->name('budayas.store');
    Route::get('/edit/{id}', [BudayasController::class, 'budayasEdit'])->name('budayas.Edit');
    Route::post('/update/{id}', [BudayasController::class, 'budayasUpdate'])->name('budayas.Update');
    Route::get('/delete/{id}', [BudayasController::class, 'budayasDelete'])->name('budayas.delete');
});
//CRUD ALL BHS IND ,Transisi AND TransisiON
Route::prefix('Bahasaindonesia')->group(function () {
    Route::get('/view', [BahasaindonesiaController::class, 'bahasaView'])->name('backend.translate.view');
    Route::get('/add', [BahasaindonesiaController::class, 'bahasaAdd'])->name('backend.translate.add');
    Route::post('/store', [BahasaindonesiaController::class, 'bahasaStore'])->name('bahasa.store');
    Route::get('/edit/{id}', [BahasaindonesiaController::class, 'bahasaEdit'])->name('bahasa.Edit');
    Route::post('/update/{id}', [BahasaindonesiaController::class, 'bahasaUpdate'])->name('bahasa.Update');
    Route::get('/delete/{id}', [BahasaindonesiaController::class, 'bahasaDelete'])->name('bahasa.delete');
});
//BAHASA OSING
Route::prefix('Bahasaosing')->group(function () {
    Route::get('/view', [BahasaosingController::class, 'osingView'])->name('backend.osing.view');
    Route::get('/add', [BahasaosingController::class, 'osingAdd'])->name('backend.osing.add');
    Route::post('/store', [BahasaosingController::class, 'osingStore'])->name('osing.store');
    Route::get('/edit/{id}', [BahasaosingController::class, 'osingEdit'])->name('osing.Edit');
    Route::post('/update/{id}', [BahasaosingController::class, 'osingUpdate'])->name('osing.Update');
    Route::get('/delete/{id}', [BahasaosingController::class, 'osingDelete'])->name('osing.delete');
});

//Transisi
Route::prefix('Transisi')->group(function () {
    Route::get('/view', [TransisiController::class, 'TransisiView'])->name('backend.transisi.view');
    Route::get('/add', [TransisiController::class, 'TransisiAdd'])->name('backend.transisi.add');
    Route::post('/store', [TransisiController::class, 'TransisiStore'])->name('transisi.store');
    Route::get('/edit/{id}', [TransisiController::class, 'TransisiEdit'])->name('transisi.Edit');
    Route::post('/update/{id}', [TransisiController::class, 'TransisiUpdate'])->name('transisi.Update');
    Route::get('/delete/{id}', [TransisiController::class, 'TransisiDelete'])->name('transisi.delete');
});
//users crud
Route::prefix('users')->group(function () {
    Route::get('/view', [UsersController::class, 'UserView'])->name('backend.user.view');
    Route::get('/add', [UsersController::class, 'UserAdd'])->name('backend.user.add');
    Route::post('/store', [UsersController::class, 'UserStore'])->name('user.store');
    Route::get('/edit/{id}', [UsersController::class, 'UserEdit'])->name('user.Edit');
    Route::post('/update/{id}', [UsersController::class, 'UserUpdate'])->name('user.Update');
    Route::get('/delete/{id}', [UsersController::class, 'UserDelete'])->name('user.delete');
});
