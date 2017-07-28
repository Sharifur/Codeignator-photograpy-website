<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'BaseController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'LoginController';
$route['admin/dashboard'] = 'Admin_management/dashboard';
$route['admin/login'] = 'LoginController/Admin_login';
$route['logout'] = 'LoginController/Admin_logout';

$array = [
  'ServiceController'=> 'service',
  'AboutController'=> 'about',
  'HeaderController'=> 'header',
  'PhotosController'=> 'my-photos',
  'StatsController'=> 'stats',
  'FooterController'=> 'footer'
];
foreach ($array as $key => $value) {
    $route[$value] = $key;
    $route[$value . '/create'] = $key . '/Create';
    $route[$value . '/store'] = $key . '/Store';
    $route[$value . '/edit/(:num)'] = $key . '/Edit/$1';
    $route[$value . '/delete/(:num)'] = $key . '/Delete/$1';
    $route[$value . '/update/(:num)'] = $key . '/Update/$1';

}

//$route['header'] = 'HeaderController';
//$route['header/create'] = 'HeaderController/create';
//$route['header/edit/(:num)'] = 'HeaderController/edit/$1';
//$route['header/delete/(:num)'] = 'HeaderController/delete/$1';
//$route['header/update/(:num)'] = 'HeaderController/update/$1';
//$route['header/store'] = 'HeaderController/store';
//
//$route['about'] = 'AboutController';
//$route['about/store'] = 'AboutController/Store';
//
//$route['service'] = 'ServiceController';
//$route['service/create'] = 'ServiceController/Create';
//$route['service/store'] = 'ServiceController/Store';
//$route['service/edit/(:num)'] = 'ServiceController/edit/$1';
//$route['service/update/(:num)'] = 'ServiceController/update/$1';
//$route['service/delete/(:num)'] = 'ServiceController/delete/$1';
//
//$route['my-photos'] = 'PhotosController';
//$route['my-photos/create'] = 'PhotosController/Create';
//$route['my-photos/store'] = 'PhotosController/Store';
//$route['my-photos/edit/(:num)'] = 'PhotosController/edit/$1';
//$route['my-photos/update/(:num)'] = 'PhotosController/Update/$1';
//$route['my-photos/delete/(:num)'] = 'PhotosController/Delete/$1';
//
//$route['stats'] = 'StatsController';
//$route['stats/update'] = 'StatsController/Update';
//$route['footer'] = 'FooterController';
//$route['footer/update'] = 'FooterController/Update';
