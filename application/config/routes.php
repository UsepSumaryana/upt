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
$route['akunupt'] = 'akunUptController';
$route['laporan'] = 'laporanController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
