<?php

namespace Config;

use PhpParser\Node\Name;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Landing::web');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'role:administrator, user,kepsek'], ['as' => 'dashboard']);



// Data Akun 
$routes->get('/data-akun', 'DataAkun::index', ['filter' => 'auth']);
$routes->post('/data-akun/save', 'DataAkun::save', ['filter' => 'auth']);
$routes->delete('/data-akun/(:num)', 'DataAkun::delete/$1', ['filter' => 'auth']);
$routes->get('/data-akun/edit/(:num)', 'DataAkun::edit/$1', ['filter' => 'auth']);
$routes->post('/data-akun/update/(:num)', 'DataAkun::update/$1', ['filter' => 'auth']);
$routes->get('/data-akun/detail/(:num)', 'DataAkun::detail/$1', ['filter' => 'auth']);
$routes->post('/data-akun/activate', 'DataAkun::activate', ['filter' => 'auth']);
$routes->post('/data-akun/changeGroup', 'DataAkun::changeGroup', ['filter' => 'auth']);
$routes->get('/setting/(:num)', 'DataAkun::setting/$1', ['filter' => 'auth']);
$routes->post('/setting/update/(:num)', 'DataAkun::upset/$1', ['filter' => 'auth']);

$routes->get('/user', 'Akun::index', ['filter' => 'auth']);
$routes->post('/tambahAkun/saveAkun', 'Akun::saveAkun', ['filter' => 'auth']);
$routes->get('/editAkun/(:num)', 'Akun::editAkun/$1', ['filter' => 'auth']);
$routes->post('/editAkun/edit/(:num)', 'Akun::edit/$1', ['filter' => 'auth']);
$routes->delete('/user/(:num)', 'Akun::deleteAkun/$1', ['filter' => 'auth']);

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

// Data Akun 
// $routes->get('/data-akun', 'DataAkun::index', ['filter' => 'auth']);
// 

// $routes->get('/data-akun/edit/(:num)', 'DataAkun::edit/$1', ['filter' => 'auth']);
// $routes->post('/data-akun/update/(:num)', 'DataAkun::update/$1', ['filter' => 'auth']);
// $routes->get('/data-akun/detail/(:num)', 'DataAkun::detail/$1', ['filter' => 'auth']);

// Akun
// $routes->get('/user', 'Akun::index', ['filter' => 'auth']);
// $routes->post('/tambah/save', 'Akun::save', ['filter' => 'auth']);
// $routes->get('/user/edit/(:num)', 'Akun::edit/$1', ['filter' => 'auth']);
// $routes->post('/edit/update/(:num)', 'Akun::update/$1', ['filter' => 'auth']);
// $routes->delete('/user/(:num)', 'Akun::delete/$1', ['filter' => 'auth']);

// Kategori
$routes->get('kategori', 'Kategori::index', ['filter' => 'auth']);
$routes->post('kategori/save', 'Kategori::save', ['filter' => 'auth']);
$routes->get('kategori/edit/(:num)', 'kategori::edit/$1', ['filter' => 'auth']);
$routes->post('kategori/update/(:num)', 'kategori::update/$1', ['filter' => 'auth']);
$routes->delete('kategori/(:num)', 'kategori::delete/$1', ['filter' => 'auth']);

// Jenis
$routes->get('jenis', 'Jenis::index', ['filter' => 'auth']);
$routes->post('jenis/save', 'Jenis::save', ['filter' => 'auth']);
$routes->get('jenis/edit/(:num)', 'Jenis::edit/$1', ['filter' => 'auth']);
$routes->post('jenis/update/(:num)', 'Jenis::update/$1', ['filter' => 'auth']);
$routes->delete('jenis/(:num)', 'Jenis::delete/$1', ['filter' => 'auth']);

// Kelas
$routes->get('kelas', 'Kelas::index', ['filter' => 'auth']);
$routes->post('kelas/save', 'Kelas::save', ['filter' => 'auth']);
$routes->get('kelas/edit/(:num)', 'Kelas::edit/$1', ['filter' => 'auth']);
$routes->post('kelas/update/(:num)', 'Kelas::update/$1', ['filter' => 'auth']);
$routes->delete('kelas/(:num)', 'Kelas::delete/$1', ['filter' => 'auth']);

// Siswa
$routes->get('siswa', 'Siswa::index', ['filter' => 'auth']);
$routes->get('siswa/siswa', 'Siswa::siswa', ['filter' => 'auth']);
$routes->post('siswa/save', 'Siswa::save', ['filter' => 'auth']);
$routes->get('siswa/edit/(:num)', 'Siswa::edit/$1', ['filter' => 'auth']);
$routes->get('siswa/detail/(:num)', 'Siswa::detail/$1', ['filter' => 'auth']);
$routes->post('siswa/update/(:num)', 'Siswa::update/$1', ['filter' => 'auth']);
$routes->delete('siswa/(:num)', 'Siswa::delete/$1', ['filter' => 'auth']);

// Prestasi
$routes->get('prestasi', 'Prestasi::index', ['filter' => 'auth']);
$routes->post('prestasi/save', 'Prestasi::save', ['filter' => 'auth']);
$routes->get('prestasi/edit/(:num)', 'Prestasi::edit/$1', ['filter' => 'auth']);
$routes->post('prestasi/update/(:num)', 'Prestasi::update/$1', ['filter' => 'auth']);
$routes->get('prestasi/view/(:num)', 'Prestasi::view/$1', ['filter' => 'auth']);
$routes->delete('prestasi/(:num)', 'Prestasi::delete/$1', ['filter' => 'auth']);

// Pelanggaran
$routes->get('pelanggaran', 'Pelanggaran::index', ['filter' => 'auth']);
$routes->post('pelanggaran/save', 'Pelanggaran::save', ['filter' => 'auth']);
$routes->get('pelanggaran/edit/(:num)', 'Pelanggaran::edit/$1', ['filter' => 'auth']);
$routes->post('pelanggaran/update/(:num)', 'Pelanggaran::update/$1', ['filter' => 'auth']);
$routes->get('pelanggaran/view/(:num)', 'Pelanggaran::view/$1', ['filter' => 'auth']);
$routes->delete('pelanggaran/(:num)', 'Pelanggaran::delete/$1', ['filter' => 'auth']);
$routes->post('getJenis', 'Pelanggaran::getJenis', ['filter' => 'auth']);

// Landing
$routes->get('landing', 'Landing::index', ['filter' => 'auth']);
$routes->post('landing/update', 'Landing::update', ['filter' => 'auth']);

// Laporan

$routes->get('laporan', 'Laporan::index', ['filter' => 'auth']);
$routes->get('laporan/prestasi', 'Laporan::prestasi', ['filter' => 'auth']);
$routes->get('laporan/prestasi/tingkat/print', 'Laporan::prestasi', ['filter' => 'auth']);
$routes->post('laporan/prestasi/tingkat/print', 'Laporan::printPrestasiTingkat', ['filter' => 'auth']);
$routes->get('laporan/cetak_prestasi/(:num)', 'Laporan::cetak_prestasi/$1', ['filter' => 'auth']);
$routes->get('laporan/prestasi/print', 'Laporan::printPrestasi', ['filter' => 'auth']);
$routes->get('laporan/pelanggaran/detail/print/(:num)', 'Laporan::printPelanggaranDetail/$1', ['filter' => 'auth']);
$routes->get('laporan/pelanggaran/print', 'Laporan::printPelanggaran', ['filter' => 'auth']);
$routes->get('laporan/pelanggaran/sp/print/(:num)', 'Laporan::printPelanggaranSP/$1', ['filter' => 'auth']);
$routes->post('laporan/pelanggaran/sp/print/(:num)', 'Laporan::printPelanggaranSP/$1', ['filter' => 'auth']);
$routes->get('laporan/pelanggaran/sp/tanggal/(:num)', 'Laporan::tanggalPelanggaranSP/$1', ['filter' => 'auth']);
$routes->get('laporan/pelanggaran/individu/print/(:num)', 'Laporan::printPelanggaranSiswa/$1', ['filter' => 'auth']);
$routes->post('import-data/import', 'Siswa::import');



// Login Register
// $routes->get('/', 'Login::index');
// $routes->get('/logout', 'Login::logout');
// $routes->get('/register', 'Register::index');
// $routes->post('/register/save', 'Register::save');
// $routes->post('/login/auth', 'Login::auth');


// $routes->get('/setting/(:num)', 'Setting::edit/$1', ['filter' => 'auth']);
// $routes->post('/setting/update/(:num)', 'Setting::update/$1', ['filter' => 'auth']);
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
