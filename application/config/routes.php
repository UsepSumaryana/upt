<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['home'] = 'homeController';
$route['datamaster'] = 'dataMasterController';
$route['datamaster/add'] = 'dataMasterController/add';
$route['datamaster/edit/(:any)'] = 'dataMasterController/edit/$1';
$route['dashboard'] = 'homeController';
$route['penjadwalan'] = 'jadwalController';
$route['penjadwalan/add'] = 'jadwalController/add';
$route['penjadwalan/edit/(:any)'] = 'jadwalController/edit/$1';
$route['reservasi'] = 'reservasiController';
$route['reservasi/add'] = 'reservasiController/add';
$route['reservasi/edit/(:any)'] = 'reservasiController/edit/$1';
$route['akunupt'] = 'akunUptController';
$route['akunupt/add'] = 'akunUptController/add';
$route['akunupt/edit/(:any)'] = 'akunUptController/edit/$1';
$route['laporan'] = 'laporanController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
