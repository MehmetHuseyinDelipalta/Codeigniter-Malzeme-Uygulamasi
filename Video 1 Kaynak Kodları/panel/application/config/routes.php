<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "index";
$route['404_override'] = '';


$route['welcome'] = 'welcome/index';
$route['welcome/(.*)'] = 'welcome/$1';

$route['category'] = 'category/index';
$route['category/(.*)'] = 'category/$1';

$route ["^(.*)"] = "index/$1";





/* End of file routes.php */
/* Location: ./application/config/routes.php */