<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//burada yönlendirmeler yapılır


$route['default_controller'] = "index";
$route['404_override'] = '';


$route['welcome'] = 'welcome/index';
$route['welcome/(.*)'] = 'welcome/$1';

$route['category'] = 'category/index';
$route['category/(.*)'] = 'category/$1';

$route['supplier'] = 'supplier/index';
$route['supplier/(.*)'] = 'supplier/$1';

$route['product'] = 'product/index';
$route['product/(.*)'] = 'product/$1';

$route['purchase'] = 'purchase/index';
$route['purchase/(.*)'] = 'purchase/$1';

$route ["^(.*)"] = "index/$1";





/* End of file routes.php */
/* Location: ./application/config/routes.php */