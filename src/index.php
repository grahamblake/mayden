<?php

require './controllers/list.php';
require './controllers/item.php';

use Controllers\ListController;
use Controllers\ItemController;


// Get the route
$strippedFirst = substr($_SERVER['REQUEST_URI'], 1);
$route = explode('/', $strippedFirst);


// Remove the first element of the array
$route = explode('?',$route[1]);

$lists = new ListController();
$items = new ItemController();

// Determine the route
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  switch ($route[0]) {
    case 'lists':
      $lists->create($_POST);
      break;
    case 'list':
      $lists->index();
      break;
    case 'edit':
      $lists->edit($_GET);
      break;
    case 'createitem':
      $items->create($_GET);
      break;
  }
} else {
  switch ($route[0]) {
    case 'lists':
      $lists->store($_POST);
      break;
    case 'items':
      $items->store($_POST);
      break;
  }
}
