<?php
require './classes/File.class.php';

use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{
    public function test_index()
    {
        //$this->assertTrue(true);

        $c = new File\File();
        $c->write(["one","two","three"]);

    }
}