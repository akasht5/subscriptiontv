<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['customers'] = 'customers/index';
$route['subscriptions'] = 'subscriptions/index';
$route['packages'] = 'packages/index';
$route['report'] = 'report/index';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
