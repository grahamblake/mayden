<?php
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