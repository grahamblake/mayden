<?php

namespace File;

class File
{
  public function __construct()
  {
    print "File class loaded\n";
  }
  
  public function test(): string
  {
    return "test";
  }
}