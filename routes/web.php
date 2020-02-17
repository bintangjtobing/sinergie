<?php

use App\Http\Controllers\MuridController;
use Spatie\Sitemap\SitemapGenerator;

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


// WITHOUT AUTHENTICATION
Route::get('/', 'AuthController@login')->name('signin');
Auth::routes();
Route::get('/404', 'DashboardController@ernodata');;
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/murid/registrasi', 'MuridController@daftar');
Route::post('/murid/registrasiproses', 'MuridController@registrasi');
Route::get('sitemap', function () {
    SitemapGenerator::create('https://e-learning.sinergicollege.com/')->writeToFile(public_path('sitemap.xml'));
    return 'sitemap created';
});

// SISWA PART
// Hanya untuk siswa yang belum auth login
Route::get('/siswa', 'Auth\muridAuthController@showLoginForm')->middleware('guest');
Route::get('/siswa/dashboard', function () {
    $datasiswa = DB::table('murid')
        ->join('kelas', 'murid.kelas', '=', 'kelas.kelas_id')
        ->where('murid.kelas', '=', 'kelas.kelas_id')
        ->select('murid.*', 'kelas.*')
        ->get();
    return view('siswa.home', ['datasiswa' => $datasiswa]);
})->name('siswadashboard');
Route::post('siswa-login', ['as' => 'siswa-login', 'uses' => 'Auth\muridAuthController@login']);
Route::get('/siswa/dashboard/logout', 'Auth\muridAuthController@logout');
Route::get('/siswa/{id_murid}/setting', 'MuridController@setting');
Route::post('/siswa/{id_murid}/updatesiswa', 'MuridController@update');

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('optimize:clear');
    return 'DONE'; //Return anything
});


// MEMBUTUHKAN OTOTIKASI AUTH
Route::group(['middleware' => ['auth']], function () {
    // ROUTE VIEW
    Route::get('/dashboard', 'DashController@index');
    Route::get('/kelas', 'KelasController@index');
    Route::get('/paket', 'paketController@index');
    Route::get('/member-murid', 'MuridController@index');
    Route::get('/member', 'MemberController@index');
    Route::get('/email', 'DashboardController@email');
    Route::post('/send', 'DashboardController@sendEmail');
    Route::get('/subpelajaran', 'MateriController@subpelajaran');



    // ROUTE VIEW ADD DATA
    Route::get('/additem', 'ItemController@addview');
    Route::post('/kelas/addnew', 'KelasController@addnewkelas');
    Route::post('/materi/addnew', 'KelasController@addnewmateri');
    Route::post('/paket/addnew', 'paketController@addnewpaket');

    // ROUTE CREATE NEW
    Route::post('/item/addnew', 'ItemController@addnewitem');
    Route::post('/kategori/addnew', 'KategoriController@addnew');
    Route::post('/member/addnew', 'MemberController@addnewmember');
    Route::post('/subpelajaran/addnew', 'KelasController@addnewsub');

    // ROUTE GET (EDIT ROUTE)
    Route::get('item/{item_id}/edit', 'ItemController@edit');
    Route::get('kategori/{id}/edit', 'KategoriController@edit');
    Route::get('member/{member_id}/edit', 'MemberController@edit');

    // ROUTE UPDATE (UPDATE ROUTE)
    Route::post('item/{item_id}/update', 'ItemController@update');
    Route::post('kategori/{id}/update', 'KategoriController@update');
    Route::post('member/{member_id}/update', 'MemberController@update');

    // ROUTE DELETE (DELETE ROUTE)
    Route::get('item/{item_id}/delete', 'ItemController@delete');
    Route::get('kategori/{id}/delete', 'KategoriController@delete');
    Route::get('member/{member_id}/delete', 'MemberController@delete');
    Route::get('murid/{id_murid}/delete', 'MuridController@deletemurid');
    Route::get('kelas/{kelas_id}/delete', 'KelasController@deletekelas');
    Route::get('materi/{materi_id}/delete', 'KelasController@deletemateri');
    Route::get('subpelajaran/{subkelas_id}/delete', 'KelasController@deletesub');

    // ROUTE DETAILS
    Route::get('item/{item_id}/details', 'ItemController@details');
    Route::post('item/{item_id}/details/additem', 'ItemController@additem');
    Route::post('item/{item_id}/details/save', 'ItemController@save');
    Route::get('item/{detail_items_id}/details/delete', 'ItemController@deleteitem');
    Route::get('murid/{id_murid}/view', 'MuridController@view');

    // ROUTE AJAX
    Route::get('/item/fetch_data', 'ItemController@fetch_data');
    Route::post('/item/add_data', 'ItemController@add_data')->name('item.add_data');
});
