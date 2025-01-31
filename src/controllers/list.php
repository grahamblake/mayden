<?php

namespace Controllers;

require_once './classes/File.class.php';
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

  public function edit($get)
  {
    echo $get['name'];
    // Need to fetch the list details
    $f = new File();
    $data = $f->find($get['name']);

    if (count($data) == 0) {
      echo "No data found";
      exit();
    }

    $listName = $get['name'];
    // Extract list items
    // $listItems = explode(",", $data[1]);
    // remove array cell
  //  echo "data is/was";
    //print_r($data);
    array_shift($data);
//echo "list items are";
    //print_r($listItems);
    //echo "data now";
    //print_r($data);
    
    include './views/view_list.php';
  }
}