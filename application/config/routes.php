<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['kontak']['get'] = 'welcome/kontak';
$route['wp-admin']['get'] = 'login/login_form';
$route['logout']['get'] = 'login/logout';
$route['cek_login']['post'] = 'login/cek_login';
$route['cek_login']['get'] = 'login/cek_login';
$route['dashbord']['get'] = 'dashbord/halaman';
$route['cari_dokumen']['post'] = 'dashbord/cari_dokumen';
$route['cari_dokumen']['get'] = 'dashbord/cari_dokumen_get';
$route['uu']['get'] = 'dashbord/uu';
$route['perpres']['get'] = 'dashbord/perpres';
$route['perda']['get'] = 'dashbord/perda';
$route['perbup']['get'] = 'dashbord/perbup';
$route['kepbup']['get'] = 'dashbord/kepbup';
$route['monografi']['get'] = 'dashbord/monografi';
$route['yurisprudensi']['get'] = 'dashbord/yurisprudensi';
$route['artikel']['get'] = 'dashbord/artikel';
$route['bukuhukum']['get'] = 'dashbord/bukuhukum';
$route['perpustakaan']['get'] = 'dashbord/perpustakaan';
$route['perpustakaan']['post'] = 'dashbord/perpustakaan';
$route['putusan']['get'] = 'dashbord/putusan';
$route['anggota']['get'] = 'dashbord/anggota';
$route['uploaddok/(:any)']['get'] = 'documents/uploadqrcode/$1';
$route['perpustakaan/buku/(:any)']['get'] = 'dashbord/listbuku';
$route['perpustakaan/buku']['post'] = 'dashbord/listbuku';
$route['perpustakaan/majalah']['post'] = 'dashbord/listbuku';
$route['perpustakaan/dvd']['post'] = 'dashbord/listbuku';
$route['perpustakaan/booklet']['post'] = 'dashbord/listbuku';
$route['perpustakaan/leaflet']['post'] = 'dashbord/listbuku';
$route['uploaddoks']['post'] = 'documents/do_upload';

$route['sejarah']['get'] = 'Halaman/sejarah';
$route['dasar-hukum']['get'] = 'Halaman/dashuk';
$route['sop']['get'] = 'Halaman/sop';
$route['visi']['get'] = 'Halaman/visi';
$route['misi']['get'] = 'Halaman/misi';
$route['sktim']['get'] = 'Halaman/sktim';
$route['organisasi']['get'] = 'Halaman/organisasi';
$route['berita']['get'] = 'Halaman/berita';
// $route['kontak'] = ['get', 'welcome/kontak'];
// $route['kontak'] = ['get', 'welcome/show_profile_by_slug/$1'];
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
