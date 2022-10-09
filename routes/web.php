<?php

Route::post('/login', 'LoginController@login');
Route::get('/', 'LoginController@checkAuth');
Route::get('/logout', 'LoginController@logout');

Route::group(['middleware' => ['auth', 'role:siswa']], function () {
    Route::get('/siswa/beranda', 'SiswaController@beranda');
    Route::post('/siswa/raport', 'SiswaController@cetakraport');
});

Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('/beranda', 'SuperadminController@beranda');

    Route::get('/m/pegawai', 'SuperadminController@pegawai');
    Route::get('/m/pegawai/create', 'SuperadminController@pegawaicreate');
    Route::post('/m/pegawai/create', 'SuperadminController@pegawaistore');
    Route::get('/m/pegawai/edit/{id}', 'SuperadminController@pegawaiedit');
    Route::post('/m/pegawai/edit/{id}', 'SuperadminController@pegawaiupdate');
    Route::get('/m/pegawai/delete/{id}', 'SuperadminController@pegawaidelete');

    Route::get('/m/sekda', 'SuperadminController@sekda');
    Route::get('/m/sekda/create', 'SuperadminController@sekdacreate');
    Route::post('/m/sekda/create', 'SuperadminController@sekdastore');
    Route::get('/m/sekda/edit/{id}', 'SuperadminController@sekdaedit');
    Route::post('/m/sekda/edit/{id}', 'SuperadminController@sekdaupdate');
    Route::get('/m/sekda/delete/{id}', 'SuperadminController@sekdadelete');

    Route::get('/m/bendahara', 'SuperadminController@bendahara');
    Route::get('/m/bendahara/create', 'SuperadminController@bendaharacreate');
    Route::post('/m/bendahara/create', 'SuperadminController@bendaharastore');
    Route::get('/m/bendahara/edit/{id}', 'SuperadminController@bendaharaedit');
    Route::post('/m/bendahara/edit/{id}', 'SuperadminController@bendaharaupdate');
    Route::get('/m/bendahara/delete/{id}', 'SuperadminController@bendaharadelete');

    Route::get('/m/jabatan', 'SuperadminController@jabatan');
    Route::get('/m/jabatan/create', 'SuperadminController@jabatancreate');
    Route::post('/m/jabatan/create', 'SuperadminController@jabatanstore');
    Route::get('/m/jabatan/edit/{id}', 'SuperadminController@jabatanedit');
    Route::post('/m/jabatan/edit/{id}', 'SuperadminController@jabatanupdate');
    Route::get('/m/jabatan/delete/{id}', 'SuperadminController@jabatandelete');

    Route::get('/m/skpd', 'SuperadminController@skpd');
    Route::get('/m/skpd/create', 'SuperadminController@skpdcreate');
    Route::post('/m/skpd/create', 'SuperadminController@skpdstore');
    Route::get('/m/skpd/edit/{id}', 'SuperadminController@skpdedit');
    Route::post('/m/skpd/edit/{id}', 'SuperadminController@skpdupdate');
    Route::get('/m/skpd/delete/{id}', 'SuperadminController@skpddelete');

    Route::get('/m/biaya', 'SuperadminController@biaya');
    Route::get('/m/biaya/create', 'SuperadminController@biayacreate');
    Route::post('/m/biaya/create', 'SuperadminController@biayastore');
    Route::get('/m/biaya/edit/{id}', 'SuperadminController@biayaedit');
    Route::post('/m/biaya/edit/{id}', 'SuperadminController@biayaupdate');
    Route::get('/m/biaya/delete/{id}', 'SuperadminController@biayadelete');

    Route::get('/m/spt', 'SuperadminController@spt');
    Route::get('/m/spt/create', 'SuperadminController@sptcreate');
    Route::post('/m/spt/create', 'SuperadminController@sptstore');
    Route::get('/m/spt/edit/{id}', 'SuperadminController@sptedit');
    Route::post('/m/spt/edit/{id}', 'SuperadminController@sptupdate');
    Route::get('/m/spt/delete/{id}', 'SuperadminController@sptdelete');

    Route::get('/m/sppd', 'SuperadminController@sppd');
    Route::get('/m/sppd/create', 'SuperadminController@sppdcreate');
    Route::post('/m/sppd/create', 'SuperadminController@sppdstore');
    Route::get('/m/sppd/edit/{id}', 'SuperadminController@sppdedit');
    Route::post('/m/sppd/edit/{id}', 'SuperadminController@sppdupdate');
    Route::get('/m/sppd/delete/{id}', 'SuperadminController@sppddelete');

    Route::get('/m/pembayaran', 'SuperadminController@pembayaran');
    Route::get('/m/pembayaran/create', 'SuperadminController@pembayarancreate');
    Route::post('/m/pembayaran/create', 'SuperadminController@pembayaranstore');
    Route::get('/m/pembayaran/edit/{id}', 'SuperadminController@pembayaranedit');
    Route::post('/m/pembayaran/edit/{id}', 'SuperadminController@pembayaranupdate');
    Route::get('/m/pembayaran/delete/{id}', 'SuperadminController@pembayarandelete');

    Route::get('/laporan', 'LaporanController@index');
    Route::get('/laporan/pegawai', 'LaporanController@pegawai');
    Route::get('/laporan/sekda', 'LaporanController@sekda');
    Route::get('/laporan/bendahara', 'LaporanController@bendahara');
    Route::get('/laporan/jabatan', 'LaporanController@jabatan');
    Route::get('/laporan/skpd', 'LaporanController@skpd');
    Route::get('/laporan/sppd', 'LaporanController@sppd');
    Route::get('/laporan/spt', 'LaporanController@spt');
    Route::get('/laporan/biaya', 'LaporanController@biaya');
    Route::get('/laporan/pembayaran', 'LaporanController@pembayaran');
});
