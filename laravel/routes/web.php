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
    return view('form');
});
Route::post('submitForm','MuridController@indexDT');
Route::get('/downloadPDF/{id}','MuridController@downloadPDF');

Route::get('/', ['uses' => 'PresensiController@index', 'as' => 'presensi']);
Route::post('/presensi/post', ['uses' => 'PresensiController@presensi', 'as' => 'presensi-post']);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', ['uses' => 'IndexController@index', 'as' => 'dashboard']);


    Route::resource('riwayat', 'RiwayatController');
    Route::resource('murid', 'MuridController');
    Route::resource('kelas', 'KelasController');
    Route::resource('sesi-kelas', 'SesiKelasController');
    Route::resource('poin', 'PoinController');
    Route::get('bulk-add', 'MuridController@bulkAdd')->name('bulk');
    Route::post('bulk-add', 'MuridController@bulkAddPost')->name('bulk');
    Route::get('dt-murid', 'MuridController@indexDT')->name('dt-murid');
    Route::delete('/murid/{id}', 'MuridController@destroy')->name('murid.destroy');
    Route::delete('dl-murid', 'MuridController@destroy')->name('dl-murid');
    Route::get('murid/{id}/delete', ['uses' => 'MuridController@destroy', 'as' => 'murid.delete']);
    Route::get('dt-kelas', 'KelasController@kelasDT')->name('dt-kelas');
    Route::get('dt-riwayat', 'RiwayatController@kelasDT')->name('dt-riwayat');
    Route::get('r-murid', 'MuridController@rDT')->name('r-murid');
    Route::get('dt-sesi', 'SesiKelasController@sesiDT')->name('dt-sesi');
    Route::get('dt-poin-history/{id}', 'PoinController@poinHistoryDT')->name('dt-poin-history');
    Route::post('dz-upload', 'MuridController@dropZoneUpload')->name('dz-upload');
});


Route::get('debugging', function () {
    /* $date = \Carbon\Carbon::now()->setTimezone('Asia/Jakarta');
     $sesi = \App\SesiKelas::all();
     $now = $date->format('Y-m-d H:i:s');
     $day = $date->format('l');

     $output = array();
     foreach ($sesi as $sesi_kelas) {
         $start = \Carbon\Carbon::parse($sesi_kelas->jam_mulai)->format('Y-m-d H:i:s');
         $end = \Carbon\Carbon::parse($sesi_kelas->jam_selesai)->format('Y-m-d H:i:s');

         //cek sesi kelas
         if ($now > $start && $now < $end) {
             //cek murid sudah pernah absen pada sesi kelas
             $new_presensi = \App\Presensi::where('murid_id', '=', 22)->whereBetween('created_at', [$start, $end])->first();
             //dd($new_presensi->created_at);

             $presensi_exist_time = $new_presensi['created_at'];
             //dd($presensi_exist_time);
             if ($new_presensi !== null && $presensi_exist_time > $start && $presensi_exist_time < $end) {
                 $output = array();
                 $output = array(['type' => 'warning', 'message' => $new_presensi->murid->nama_lengkap . ' Telah melakukan presensi pada sesi kelas saat ini']);
             } else {

                 $output = array();
                 $output = array(['type' => 'success', 'message' => 'Berhasil melakukan presensi']);
                 break;
             }
         } else {
             $output = array(['type' => 'error', 'message' => 'Tidak ada kelas yg aktif pada saat ini']);
         }
     }
     return response()->json($output);*/
    $user = new \App\User();
    $user->name = 'Administrator';
    $user->username = 'administrator';
    $user->email = 'admin@presensi.com';
    $user->password = bcrypt('123456');
    $user->save();
    dd($user);

});
Auth::routes();
