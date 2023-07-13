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
$route['default_controller'] = 'home';
$route['404_override'] = 'error';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'user/login';
$route['register'] = 'user/register';

$route['about'] = 'activity/about';
$route['contact'] = 'activity/contact';
$route['blog'] = 'activity/blog';
$route['listroom'] = 'services/mylist';
$route['restaurant'] = 'services/myres';
$route['pab'] = 'services/mypool';
$route['entertainment'] = 'services/myentertainment';
$route['mas'] = 'services/myspa';
$route['tour'] = 'services/mytour';
$route['profile'] = 'user/profile';
$route['list_booking'] = 'user/list_booking';
$route['edit_profile'] = 'user/edit_profile';
$route['changepassword'] = 'user/changepassword';
$route['logout'] = 'user/logout';
$route['booking/(:num)'] = 'activity/booking/$1';
$route['admin'] = 'admin/admin';
$route['admin/manage_user'] = 'admin/user';
$route['admin/manage_room'] = 'admin/room';
$route['admin/manage_booking'] = 'admin/booking';
$route['admin/edit_user/(:num)'] = 'admin/edit_user/$1';
$route['admin/delete_user/(:num)'] = 'admin/delete_user/$1';
$route['admin/edit_room'] = 'admin/edit_room';
$route['admin/add_room'] = 'admin/add_room';
$route['admin/add_user'] = 'admin/add_user';
$route['admin/history'] = 'admin/history';

$route['admin/manage_booking'] = 'admin/booking';