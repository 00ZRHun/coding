<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'Main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['year_add']['post'] = "Main/add_year";
$route['year_edit']['post'] = "Main/edit_year";
	// delete
// v1
// $route['year_delete']['post'] = "Main/delete_year";
// v2
$route['year_delete']['post'] = "Main/delete_row";


