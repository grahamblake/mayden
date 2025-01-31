<?php

namespace Controllers;

require_once './classes/File.class.php';
use File\File;

class ListController
{
  /**
   * Display all lists
   */
  public function index()
  {
    // Retrieve lists
    $f = new File();
    $data = $f->readAll();

    include './views/index_list.php';
  }

  /**
   * Create a new list
   */
  public function create($post)
  {
    header('Location: /views/create_list.html');
    exit();
  }

  /**
   * Store the new list
   */
  public function store($post)
  {
    $listName = $post['name'];

    // Create the new list
    $f = new File();

    $f->write([$listName]);
    
    header('Location: /index.php/list');
    exit();
  }

  /**
   * Edit a list
   */
  public function edit($get)
  {
    // Need to fetch the list details
    $f = new File();
    $data = $f->find($get['name']);

    if (count($data) == 0) {
      exit();
    }

    $listName = $get['name'];
    // Extract list items
    array_shift($data);
    
    include './views/view_list.php';
  }
}