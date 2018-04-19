<?php

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

Route::get('/', function () {
	return view('welcome');
});


Auth::routes();

Route::post('/register', 'Auth\RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//routing ke halaman perawat
Route::get('/halamanperawat','PerawatController@halperawat')->name('perawat');

//routing ke hasil homecare
Route::get('/homecareperawat','PerawatController@hasilhomecare');

//routing ke form contoh
Route::get('/formlayanan', 'PerawatController@contohlagi');

Route::resource('manageuser', 'ManageUserController');

//routing ke daftar pesanan
Route::get('/pesanan', 'PerawatController@daftarpesanan');

//routing ke halaman detail homecare
Route::get('/detailhomecare','PerawatController@dethomecare');

//routing ke jadwal homecare
Route::get('/jadwalhomecare','PerawatController@jadwhomecare');

//routing ke daftar users
Route::get('/daftarusers','AdminController@dafusers');

//routing ke daftar user admin
Route::get('/admin_daftarpengguna','AdminController@dafpengguna');

//routing ke daftar mktra homecare admin
Route::get('/admin_mitrahomecare','AdminController@mitra');

//routing ke daftar mktra homecare admin
Route::get('/admin_jenislayanan','AdminController@jenis');

//routing ke daftar pesanan admin
Route::get('/admin_pemesanan','AdminController@pemesanan');

//routing ke halaman psien
Route::get('/halamanpasien','PasienController@halpasien')->name('pasien');

//route ke halaman pesan
Route::get('/halamanpesan','PasienController@halpesan');

//route ke riwayat pemesanan
Route::get('/riwayatpemesanan','PasienController@riwpesan');

Route::get('/admin_pemesanan_perawat','AdminController@lihat');

//route ke halaman pesan
// Route::get('/formpesan','PasienController@pesansekarang');

//route ke halaman pesan homecare
Route::get('/daftarhomecare','PasienController@daftar');

//route ke halaman profile
Route::get('/profilepasien','PasienController@profilpas');

//route ke halaman admin
Route::get('halamanadmin','AdminController@haladmin')->name('admin');

//route ke halaman list homecare
Route::get('listhomecare','AdminController@listhome');

//route ke halaman welcome perawat
Route::get('welcomeperawat','PerawatController@welcome1');

//route ke halaman welcome pasien
Route::get('welcomepasien','PasienController@welcome2');
//

Route::resource('listhomecare','ListController');

Route::resource('formlayanan', 'FormLayananController');

Route::resource('detailhomecare', 'DetailHomecareController');

Route::resource('perawattersedia', 'PerawatTersediaController');

Route::resource('tambahperawat', 'TambahPerawatController');

Route::resource('ubah_perawat', 'TambahPerawatController');

Route::resource('formpesan', 'PemesananController');

Route::resource('jadwalhomecare', 'JadwalHomecareController');

Route::resource('daftarhomecare', 'HalamanPesanController');

Route::resource('profilepasien', 'ProfilPasienController');

Route::resource('lihatdetail', 'LihatDetailController');

Route::resource('formpesan', 'FormPesanController');

Route::resource('riwayatpemesanan', 'RiwayatPemesananController');

Route::resource('pesanan', 'PesananController');

Route::resource('admin_daftarpengguna', 'AdminDaftarPenggunaController');

Route::resource('admin_jenislayanan', 'AdminJenisLayananController');

Route::resource('admin_pemesanan', 'AdminDaftarPemesananController');

Route::resource('admin_mitrahomecare', 'AdminMitraHomecareController');

Route::resource('detail_mitrahomecare', 'AdminDetailMitraController');

Route::resource('admin_pemesanan_perawat', 'AdminLihatPerawatController');



Route::get('ubahstatus/{id}','PesananController@ubahstatus');

Route::get('ubahstatusditerima/{id}','PesananController@ubahstatusditerima');

Route::get('ubahstatususers/{id}','AdminDaftarPenggunaController@ubahstatususers');

Route::get('ubahstatushomecare/{id}','AdminMitraHomecareController@ubahstatushomecare');

Route::get('formlayanan/{id}','FormLayananController@verifikasi');

//veifys
Route::group(['middleware' => ['isVerified']], function () { });

Route::get('verifikasi', 'FormLayananController@ubahstatus');