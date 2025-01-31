<?php

namespace File;

class File
{
  public function __construct()
  {
    // print "File class loaded\n";
  }
  
  public function test(): string
  {
    return "test";
  }

  public function readAll(): array
  {
    $fp = fopen("./storage/file2.csv", "r");

    if (!$fp) {
      return [];
    }
    $data = [];
    while ($row = fgetcsv($fp)) {
      $data[] = $row;
    }
    fclose($fp);
    return $data;
  }

  public function write($data)
  {
    $fp = fopen("./storage/file2.csv", "a");
//chmod ("./storage/file.csv", 0644);
//fwrite($fp, "test");
$r=fputcsv($fp, $data);
// fputcsv($fp, ["a","b","c"]);
fclose($fp);
  }
}