<?php

namespace Controllers;

require_once './classes/File.class.php';
use File\File;

class ItemController
{

  // public function index()
  // {
  //   // echo "HERRE";
  //   //exit();
  //   // Retrieve lists
  //   $f=new File();
  //   $data = $f->readAll();

  //   include './views/index_list.php';
  // }

  public function create($post)
  {
    // echo $post['name'];
    // echo "List Controller";

    // $listName = $post['name'];

    // // Create the new list
    // $f=new File();

    // $f->write([$listName]);
    
    // header('Location: /index.php/list');
    $list = $post['list'];
    // echo "item list" . $list;
    include './views/create_item.php';
  }

  public function store($post)
  {
    $listName = $post['list_id'];

    // Add item to list
    $f=new File();

    // replace line in csv file with new content
    $f->update($listName, $post['name']);

    
    
    header('Location: /index.php/list');
    // header('Location: /views/index_list.html');
    exit();
  }

  // public function edit($get)
  // {
  //   echo $get['name'];
  //   // Need to fetch the list details
  //   $f = new File();
  //   $data = $f->find($get['name']);

  //   if (count($data) == 0) {
  //     echo "No data found";
  //     exit();
  //   }
  //   // Extract list items
  //   $listItems = explode(",", $data[1]);
  //   // remove array cell
  //   $listItems = array_shift($listItems);
  //   include './views/view_list.php';
  // }
}