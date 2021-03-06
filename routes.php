<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/src/model/router.php");

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'views/index.php');

//####################################################

get('/movie/$search', 'views/apiSearch.php');

//####################################################

get('/f1/$search', 'views/fileSearch.php');

// Dynamic GET. Example with 1 variable and 1 query string
// In the URL -> http://localhost/item/car?price=10
// The $name will be available in items.php which is inside the views folder
//get('/item/$name', 'views/items.php');

//####################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','projectPHP/views/404.php');
