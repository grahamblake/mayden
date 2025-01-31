<?php

require './controllers/list.php';

use Controllers\ListController;
// Direct user to correct route
// $_SERVER["REQUEST_METHOD"] == "POST"

// echo "the request was: " . $_GET['route'] . "<br/>";
// echo "r:". $_SERVER['REQUEST_URI'] . "<br/>";

// echo "path: " . $_SERVER['PATH_INFO'] . "<br/>";
// echo "path: " . $_SERVER['ORIG_PATH_INFO'] . "<br/>";

// Get the route
$strippedFirst = substr($_SERVER['REQUEST_URI'], 1);
$route = explode('/', $strippedFirst);
//  echo "route: " . $route[1] . "<br/>";


// Remove the first element of the array
$route = explode('?',$route[1]);
// echo $route[0] . "<br/>";

$lists = new ListController();

// Determine the route
if ($_SERVER["REQUEST_METHOD"] == "GET") {
switch ($route[0]) {
  case 'lists':
    // echo "list******";
    $lists->create($_POST);
    break;
  case 'list':
    $lists->index();
    break;
}
} else {
switch ($route[0]) {
  case 'lists':
    $lists->store($_POST);
    break;
  // case 'list':
  //   $lists->store();
  //   break;
}
}
require './classes/File.class.php';
use File\File;

print "TEsting2";
echo "Test\n";
$fp = fopen("./storage/file2.csv", "w");
//chmod ("./storage/file.csv", 0644);
//fwrite($fp, "test");
$r=fputcsv($fp, ["one","two","three"]);
fputcsv($fp, ["a","b","c"]);
fclose($fp);
echo "result is " . $r;

if(($fp=fopen("./storage/file2.csv","rb")) !== FALSE) {
echo "opened";
// echo "state: " . fgetcsv($fp) . "\n";
while(($data = fgetcsv($fp)) !== FALSE) {
echo $data[0] . "\n";
}
}
echo "Done!!";
$x = new File();

echo $x->test();

echo '<a href="i2.php">link</a>';