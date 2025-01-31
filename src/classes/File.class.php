<?php

namespace File;

class File
{
  private string $filename;

  public function __construct(string $filename = './storage/list.csv')
  {
    $this->filename = $filename;
    
  }
  
  /**
   * Read all the data from the file
   */
  public function readAll(): array
  {
    
    $fp = fopen($this->filename, "r");

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

  /**
   * Write data to the file
   */
  public function write(array $data): void
  {
    $fp = fopen($this->filename, "a");

    fputcsv($fp, $data);

    fclose($fp);
  }

  /**
   * Find a specific  in the file
   */
  public function find($value): array|null
  {
    $fp = fopen($this->filename, "r");
    
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

  /**
   * Update a specific row in the file with new item.
   */
  public function update($needle, $value): array|null
  {
    $fp = fopen($this->filename, "r");
    
    // Check for no file
    if (!$fp) {
      return null;
    }
    $newRows = [];

    // Find the row to update
    while ($row = fgetcsv($fp)) {
      // If found update the row
      if ($row[0] == $needle) {
        $row[] = $value;
      }
      $newRows[] = $row;
    }
    fclose($fp);

    // Open the file and write the new data
    $fp = fopen($this->filename, "w");

    if (!$fp) {
      return null;
    }

    foreach ($newRows as $row) {
      fputcsv($fp, $row);
    }
    fclose($fp);

    return $newRows;
  }
}