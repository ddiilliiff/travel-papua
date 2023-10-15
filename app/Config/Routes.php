<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */

// Pengunjung
$routes->get('/', 'Home::index'); // Tampilan beranda
$routes->get('/about', 'Home::about'); // Tampilan Tentang
$routes->get('/about_kabkot/(:alphanum)', 'Home::about_kabkot/$1'); // Tampilkan daftar destinasi sesuai kabupaten kota
$routes->get('/jasa_travel', 'Home::jasa_travel'); // Tampilan jasa travel
$routes->get('/contact', 'Home::contact'); // Tampilan Kontak

// Otentikasi
$routes->get('/login', 'Auth::index'); // Tampilan Login
$routes->get('/registrasi', 'Auth::index'); // Tampilan Registrasi

// Admin
$routes->group('admin', function ($routes) {
    // Dashboard
    $routes->get('', 'Admin::index'); // Dashboard admin

    // Kabupaten-Kota
    $routes->get('/admin/kabkot', 'Admin::kabkot'); // Tampilkan data kabupaten-kota
    $routes->post('/admin/kabkot', 'Admin::save_kabkot'); // Tampilkan data kabupaten-kota
    $routes->post('/admin/kabkot/update', 'Admin::update_kabkot'); // Ubah data kabupaten kota
    $routes->get('/admin/delete_kabkot/(:alphanum)', 'Admin::delete_kabkot/$1'); // Hapus data kabupaten-kota

    // Destinasi
    $routes->get('/admin/destination', 'Admin::destination'); // Tampilkan data destinasi
    $routes->post('/admin/destination', 'Admin::save_destination'); // Tambahkan data destinasi
    $routes->post('/admin/destination/update', 'Admin::update_destination'); // Ubah data kabupaten kota
    $routes->get('/admin/delete_destination/(:alphanum)', 'Admin::delete_destination/$1'); // Hapus data destinasi

    // Tour Guide
    $routes->get('/admin/tour_guide/(:alphanum)', 'Admin::tour_guide/$1'); // Tampilkan data tour guide sesuai destianasi
    $routes->post('/admin/tour_guide', 'Admin::save_tour_guide'); // Simpan data tour guide
    $routes->post('/admin/tour_guide/update', 'Admin::update_tour_guide'); // Ubah data kabupaten kota
    $routes->get('/admin/delete_tour_guide/(:alphanum)', 'Admin::delete_tour_guide/$1'); // Hapus data tour guide

    //  Transaksi
    $routes->get('', ''); // Tampilkan transaksi
    $routes->post('', ''); // Buat transaksi
});