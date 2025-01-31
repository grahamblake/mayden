<?php

namespace Controllers;

require './classes/File.class.php';
use File\File;

class ListController
{

  public function index()
  {
    // echo "HERRE";
    //exit();
    // Retrieve lists
    $f=new File();
    $data = $f->readAll();

    include './views/index_list.php';
  }

  public function create($post)
  {
    // echo $post['name'];
    // echo "List Controller";

    // $listName = $post['name'];

    // // Create the new list
    // $f=new File();

    // $f->write([$listName]);
    
    // header('Location: /index.php/list');
    header('Location: /views/create_list.html');
    exit();
  }

  public function store($post)
  {
    $listName = $post['name'];

    // Create the new list
    $f=new File();

    $f->write([$listName]);
    
    header('Location: /index.php/list');
    // header('Location: /views/index_list.html');
    exit();
  }
}