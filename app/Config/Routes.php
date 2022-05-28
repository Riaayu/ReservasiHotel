<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/kamar', 'Home::kamar');
$routes->get('/fh', 'Home::fasilitashotel');
$routes->get('/reservasi', 'Home::reservasi');
$routes->post('/reservasi', 'Home::reservasi');
$routes->get('/reservasi/print', 'Home::print');
$routes->get('/inv/(:num)', 'Home::invoice/$1');
$routes->get('/cek', 'Home::cari');
$routes->post('/cek', 'Home::cari');
$routes->get('/petugas/login', 'PetugasController::login');


$routes->get('/petugas', 'PetugasController::index');
$routes->post('/petugas/login', 'PetugasController::login');
$routes->get('/petugas/logout', 'PetugasController::logout');
$routes->get('/petugas/dashboard','Dashboardpetugas::index',['filter'=>'otentifikasi']);


//CRUD Petugas
$routes->get('/petugas/tampil', 'PetugasController::tampilPetugas');
$routes->get('/petugas/tambah', 'PetugasController::tambahPetugas');
$routes->post('/petugas/simpan', 'PetugasController::simpanPetugas');
$routes->get('/petugas/edit/(:num)','PetugasController::editPetugas/$1');
$routes->post('/petugas/update', 'PetugasController::updatePetugas');
$routes->get('/petugas/hapus/(:num)','PetugasController::hapusPetugas/$1');

//CRUD Kamar
$routes->get('/kamar/tampil', 'KamarController::tampilKamar');
$routes->get('/kamar/tambah', 'KamarController::tambahKamar');
$routes->post('/kamar/simpan', 'KamarController::simpanKamar');
$routes->get('/kamar/edit/(:num)','KamarController::editKamar/$1');
$routes->post('/kamar/update', 'KamarController::updateKamar');
$routes->get('/kamar/editfoto/(:num)','KamarController::editFoto/$1');
$routes->post('/kamar/updatefoto', 'KamarController::updateFoto');
$routes->get('/kamar/hapus/(:num)','kamarController::hapusKamar/$1');

//CRUD Fasilitas Kamar
$routes->get('/fk/tampil', 'FasilitaskamarController::tampilFasilitaskamar');
$routes->get('/fk/tambah', 'FasilitaskamarController::tambahFasilitaskamar');
$routes->post('/fk/simpan', 'FasilitaskamarController::simpanFasilitaskamar');
$routes->get('/fk/edit/(:num)','FasilitaskamarController::editFasilitaskamar/$1');
$routes->post('/fk/update', 'FasilitaskamarController::updateFasilitaskamar');
$routes->get('/fk/hapus/(:num)','FasilitaskamarController::hapusFasilitaskamar/$1');

//CRUD Fasilitas Hotel
$routes->get('/fh/tampil', 'FasilitashotelController::tampilFasilitashotel');
$routes->get('/fh/tambah', 'FasilitashotelController::tambahFasilitashotel');
$routes->post('/fh/simpan', 'FasilitashotelController::simpanFasilitashotel');
$routes->get('/fh/edit/(:num)','FasilitashotelController::editFasilitashotel/$1');
$routes->post('/fh/update', 'FasilitashotelController::updateFasilitashotel');
$routes->get('/fh/editfoto/(:num)','FasilitashotelController::editFoto/$1');
$routes->post('/fh/updatefoto', 'FasilitashotelController::updateFoto');
$routes->get('/fh/hapus/(:num)','FasilitashotelController::hapusFasilitashotel/$1');

//CRUD Reservasi
$routes->get('/reservasi/tampil', 'ReservasiController::tampilReservasi');
$routes->get('/reservasi/edit/(:num)', 'ReservasiController::edit/$1',['filter'=>'otentifikasi']);
$routes->get('/reservasi/in/(:num)', 'ReservasiController::in/$1',['filter'=>'otentifikasi']);
$routes->get('/reservasi/out/(:num)', 'ReservasiController::out/$1',['filter'=>'otentifikasi']);
$routes->get('/reservasi/selesai/(:num)', 'ReservasiController::selesai/$1',['filter'=>'otentifikasi']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
