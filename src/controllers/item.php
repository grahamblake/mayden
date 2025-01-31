<?php

namespace Controllers;

require_once './classes/File.class.php';
use File\File;

class ItemController
{
  /**
   * Create a new item
   */
  public function create($post)
  {
    $list = $post['list'];

    include './views/create_item.php';
  }

  /**
   * Store the new item
   */
  public function store($post)
  {
    $listName = $post['list_id'];
    $f = new File();

    // replace line in csv file with new content
    $f->update($listName, $post['name']);
    
    header('Location: /index.php/edit?name=' . $listName);
    exit();
  }
}