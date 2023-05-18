# modul-codeigniter-3
Modul dan Sistem informasi aplikasi Berbasis web full source code framework Codeigniter


7 Paket dan 3 Paket Modul dan Sistem informasi aplikasi Berbasis web full source code framework Codeigniter versi 3



Kami menyediakan sistem aplikasi berbasis web dengan framework codeigniter. 3 modul masuk dalam 7 folder controller, model dan view.



Kami akan kirimkan link contoh aplikasi via chat.

Jika ada pengiriman, itu hanya amplop link coding. Namun jika sudah ACC tanpa pengiriman, maka segera untuk klik Selesaikan pesanan dan kami harapkan bintang 5



kunjungi dan chat kami untuk informasi lebih lanjut. jangan lupa nantikan versi 9 Paket CI.



Welcome to CodeIgniter!

The page you are looking at is being generated dynamically by CodeIgniter.



If you would like to edit this page you'll find it located at:



application/views/welcome_message.php

The corresponding controller for this page is found at:



application/controllers/Welcome.php



BERIKUT 3 PILIHAN MODUL APLIKASI SISTEM INFORMASI BERBASIS WEB FRAMEWORK CODEIGNITER VERSI 3



- Aplikasi Hak Akses



- Aplikasi Log Activity



- Aplikasi Ajax dan SSP(Server Side Processing)





BERIKUT 7 PILIHAN MODUL APLIKASI SISTEM INFORMASI BERBASIS WEB FRAMEWORK CODEIGNITER VERSI 3



- Aplikasi User/ Pengguna



- Aplikasi Hak Akses



- Aplikasi Log Activity



- Aplikasi Ajax dan SSP(Server Side Processing)



- Aplikasi Laporan Document (Upload Excel - Print Pdf)



- Aplikasi Wisuda



- Aplikasi Inventory (Purchasing, Gudang, Produksi, Finish Good)



* Ubah application/config/routes -> $route['default_controller'] = 'welcome'; sesuai dengan aplikasi yang akan anda tuju menjadi indeks

try it https://layanan.webiot.id/ci_all/

Full source code

free and bayar

https://shope.ee/AyXGy1x4c 



<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|   example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|   http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|   $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|   $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|   $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|       my-controller/my-method -> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['akses'] = 'akses/home';
$route['users'] = 'users/home';
$route['log'] = 'log/home';
$route['ssp'] = 'ssp/home';
$route['doc'] = 'doc/home';
$route['wisuda'] = 'wisuda/home';
$route['inventory'] = 'inventory/home';
$route['404_override'] = 'My404';
$route['translate_uri_dashes'] = TRUE;
