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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// admin common routing
$route['admin']                             = "admin/user/index";
$route['admin/login']                       = "admin/user/index";
$route['admin/logout']                      = "admin/user/logout";
$route['admin/dashboard']                   = "admin/welcome";
// admin category routing
$route['admin/categories']                  = "admin/welcome/categories";
$route['admin/categories/(:any)']           = "admin/welcome/categories/$1";
$route['admin/categories/(:any)/(:any)']    = "admin/welcome/categories/$1/$2";
// admin package routing
$route['admin/packages']                    = "admin/welcome/packages";
$route['admin/packages/(:any)']             = "admin/welcome/packages/$1";
$route['admin/packages/(:any)/(:any)']      = "admin/welcome/packages/$1/$2";
// admin makers/brand routing
$route['admin/makers']                      = "admin/welcome/makers";
$route['admin/makers/(:any)']               = "admin/welcome/makers/$1";
$route['admin/makers/(:any)/(:any)']        = "admin/welcome/makers/$1/$2";

$route['admin/users']                       = "admin/welcome/users";
$route['admin/users/(:num)']                = "admin/welcome/users/$1";

$route['admin/leads']                       = "admin/welcome/leads";
$route['admin/leads/(:num)']                = "admin/welcome/leads/$1";

$route['admin/viewmore/(:any)/(:any)']      = "admin/ajax/viewmore/$1/$2";

