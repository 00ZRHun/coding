<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'itemCRUD';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['itemCRUD'] = "itemCRUD/index";
$route['itemCRUD/(:num)'] = "itemCRUD/show/$1";
$route['itemCRUDCreate']['post'] = "itemCRUD/store";
$route['itemCRUDEdit/(:any)'] = "itemCRUD/edit/$1";
$route['itemCRUDUpdate/(:any)']['put'] = "itemCRUD/update/$1";
$route['itemCRUDDelete/(:any)']['delete'] = "itemCRUD/delete/$1";
