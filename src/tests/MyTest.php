<?php
require './classes/File.class.php';

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    public function test_index()
    {
        $this->assertTrue(true);

        $c = new File\File();
        $this->assertEquals("test", $c->test());
    }
}