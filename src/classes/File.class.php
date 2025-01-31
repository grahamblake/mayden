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

    // Check for no file
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

  public function find($value): array|null
  {
    $fp = fopen("./storage/file2.csv", "r");
    
    // Check for no file
    if (!$fp) {
      return null;
    }
    $data = [];
    while ($row = fgetcsv($fp)) {
      if ($row[0] == $value) {
        $data = $row;
        break;
      }
    }
    fclose($fp);
    return $data;
  }

  public function update($needle, $value): array|null
  {
    $fp = fopen("./storage/file2.csv", "r");
    
    // Check for no file
    if (!$fp) {
      return null;
    }
    $newRows = [];
echo "needle: " . $needle . "\n";
    while ($row = fgetcsv($fp)) {
      if ($row[0] == $needle) {
        $row[] = $value;
        $newRows[] = $row;
        echo 'needle found';
        } else {
          $newRows[] = $row;
        }
    }
    fclose($fp);

    $fp = fopen("./storage/file2.csv", "w");

    if (!$fp) {
      return null;
    }

    foreach ($newRows as $row) {
      fputcsv($fp, $row);
      echo "Row: " . $row[1] . "\n";
    }
    fclose($fp);
    return $newRows;
  }
}